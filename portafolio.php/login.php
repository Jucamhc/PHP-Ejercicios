<?php
session_start();
if ($_POST){
    if( ($_POST['email']=="usuario@prueba.com") && ( $_POST['password']=="123456789")){
        
      $_SESSION['email']="usuario@prueba.com";

      header("location:index.php");

    }else{
        echo "<script> alert('Usuario o contraseña incorrecta'); </script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
<div class="vh-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="border border-3 border-primary"></div>
        <div class="card bg-white shadow-lg">
          <div class="card-body p-5">
            <form action="login.php" method="post" class="mb-3 mt-md-4">
              <h2 class="fw-bold mb-2 text-uppercase ">Login Portafolio</h2>
              <p class=" mb-5">¡Por favor, introduce tu usuario y contraseña!</p>
              <div class="mb-3">
                <label for="email" class="form-label ">Dirección de correo electrónico</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label ">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="*******">
              </div>
              <p class="small"><a class="text-primary" href="forget-password.html">¿Se te olvidó tu contraseña?</a></p>
              <div class="d-grid">
                <button class="btn btn-success" type="submit">Acceso</button>
              </div>
            </form>
            <div>
              <p class="mb-0  text-center">¿No tienes una cuenta? <a href="signup.html"
                  class="text-primary fw-bold">Crear Cuenta</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>