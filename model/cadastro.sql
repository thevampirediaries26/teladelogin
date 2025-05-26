<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: cadastro.php");
    exit();
}

$db = new SQLite3('teladelogin');
$result = $db->query("SELECT nome, email FROM usuarios");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Usuários Cadastrados</title>
</head>
<body>
  <h2>Usuários Cadastrados</h2>
  <ul>
    <?php while ($row = $result->fetchArray(SQLITE3_ASSOC)) : ?>
      <li><?= htmlspecialchars($row['nome']) ?> - <?= htmlspecialchars($row['email']) ?></li>
    <?php endwhile; ?>
  </ul>
  <a href="bemvindo.php">Voltar</a>
</body>
</html>
<?php
session_start();
session_destroy();
header("Location: cadastro.php");
exit();
?>
