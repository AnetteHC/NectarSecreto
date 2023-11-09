<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nectar Secreto</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <div class="">
            <span class="h1 fw-bold mb-0"><img src="./img/logo3.png" width="100px" height="100px"> Nectar secreto</span>
          </div>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="POST" action="./controlador/validarRegistro.php">


            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicio de sesion</h3>

            <div class="form-outline mb-4">
              <input type="email" name="correo" class="form-control form-control-lg" />
              <label class="form-label" for="correo">Correo Electronico</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="clave" class="form-control form-control-lg" />
              <label class="form-label" for="clave">Contraseña</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-warning btn-lg btn-block" type="submit">Iniciar Sesion</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Olvidaste tu contraseña?</a></p>
            <p>No tienes una cuenta? <a href="./registroUsuario.php" class="text-warning">Registrate aqui</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://images.unsplash.com/photo-1587049352851-8d4e89133924?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bWllbHxlbnwwfHwwfHx8MA%3D%3D"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>

</body>
</html>