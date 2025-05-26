<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
     <link rel="stylesheet" href="meu_script.sql">
    <title>Tela de Login!</title>
  </head>
  <body>
    <section class="vh-100">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 text-black">
    
            <div class="px-5 ms-xl-4">
              <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
              <span class="h1 fw-bold mb-0">Logo</span>
            </div>
    
            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
    
              <form style="width: 23rem;">
    
                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login</h3>
    
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form2Example18" class="form-control form-control-lg" />
                  <label class="form-label" for="form2Example18">Endereço de Email</label>
                </div>
    
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form2Example28" class="form-control form-control-lg" />
                  <label class="form-label" for="form2Example28">Senha</label>
                </div>
    
                <div class="pt-1 mb-4">
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="button">Login</button>
                </div>
    
                <p class="small mb-5 pb-lg-2"> <a class="fcc-btn" href="recupsenha.html">Esqueceu sua senha?</a>  
                <p>Não tem conta? <a class="fcc-btn" href="cadastro.php">Registre-se aqui!</a>  
    
              </form>
    
            </div>
    
          </div>
          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
              alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
