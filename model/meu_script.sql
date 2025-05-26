<?php
$db = new SQLite3('banco.sqlite');

$db->exec("CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    senha TEXT NOT NULL
)");

$senha_hash = password_hash('', PASSWORD_DEFAULT);

$db->exec("INSERT OR IGNORE INTO usuarios (nome, email, senha)
           VALUES ('Paulo Henrique', '@email.com', '$senha_hash')");

echo "Banco de dados criado com sucesso!";
?>

<?php
session_start();
$db = new SQLite3('banco.sqlite');

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$stmt = $db->prepare("SELECT * FROM usuarios WHERE email = :email");
$stmt->bindValue(':email', $email, SQLITE3_TEXT);
$result = $stmt->execute();
$user = $result->fetchArray(SQLITE3_ASSOC);

if ($user && password_verify($senha, $user['senha'])) {
    $_SESSION['usuario'] = $user['nome'];
    header("Location: bemvindo.php");
    exit();
} else {
    echo "Usuário ou senha inválidos. <a href='login.php'>Voltar</a>";
}
?>
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo, <?= htmlspecialchars($_SESSION['usuario']) ?>!</h1>
    <a href="usuarios.php">Ver todos os usuários</a> |
    <a href="login.php">Sair</a>
</body>
</html>
