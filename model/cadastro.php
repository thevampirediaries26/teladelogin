<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Meu Site</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="cadastro.sql">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h1>Crie sua conta</h1>
                <p>Preencha os campos abaixo para se cadastrar</p>
            </div>
            
            <form class="register-form">
                <div class="input-group">
                    <label for="nome">Nome completo</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="senha">Senha</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="confirmar-senha">Confirmar senha</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder="Repita sua senha" required>
                    </div>
                </div>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="termos" name="termos" required>
                    <label for="termos">Eu concordo com os <a href="#">Termos de Serviço</a> e <a href="#">Política de Privacidade</a></label>
                </div>
                
                <button type="submit" class="submit-btn">Cadastrar</button>
                
                <div class="login-link">
                    Já tem uma conta? <a class="fcc-btn" href="login.php">Faça login!</a>  
                </div>
            </form>
        </div>
        
        <div class="image-container">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp">
        </div>
    </div>
</body>
</html>
