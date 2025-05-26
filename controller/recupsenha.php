<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="recup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link rel="stylesheet" href="meu_script.sql">
</head>
<body>
    <div class="recovery-container">
        <div class="recovery-card">
            <div class="recovery-logo">
                <i class="fas fa-key"></i>
            </div>
            
            <h1>Esqueceu sua senha?</h1>
            <p class="recovery-subtitle">Digite seu e-mail cadastrado para receber as instruções de recuperação</p>
            
            <form class="recovery-form">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                    </div>
                </div>
                
                <button type="submit" class="recovery-btn">
                    Enviar Link de Recuperação
                </button>
                
                <div class="back-to-login">
                    <a href="#"><i class="fas fa-arrow-left"></i> Voltar para o login</a>
                </div>
            </form>
            
            <div class="recovery-footer">
                <p>Não recebeu o e-mail? <a href="#">Reenviar</a></p>
                <p>Ainda com problemas? <a href="#">Fale conosco</a></p>
            </div>
        </div>
        
        <div class="recovery-image">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp" alt="Imagem de recuperação de senha">
        </div>
    </div>
</body>
</html>
