<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nectar secreto</title>
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

          <form style="width: 23rem;" method="POST" action="./controlador/registrarUsuario.php">

          <div class="center">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registro</h3>
          </div>

            <div class="form-outline mb-4">
              <input type="text" name="correo" class="form-control form-control-lg" />
              <label class="form-label" for="correo">Correo electronico</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="clave" class="form-control form-control-lg" />
              <label class="form-label" for="clave">Contraseña</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" name="nombre" class="form-control form-control-lg" />
              <label class="form-label" for="nombre">Nombre de usuario</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" name="apaterno" class="form-control form-control-lg" />
              <label class="form-label" for="apaterno">Apellido Paterno</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" name="amaterno" class="form-control form-control-lg" />
              <label class="form-label" for="amaterno">Apellido Materno</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" name="direccion" class="form-control form-control-lg" />
              <label class="form-label" for="direccion">Direccion</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" name="telefono" class="form-control form-control-lg" />
              <label class="form-label" for="telefono">Numero de telefono fijo</label>
            </div>
          
            <div class="pt-1 mb-4">
              <input class="btn btn-warning btn-lg btn-block" type="submit" value="Registar" name="registro">
              <br><a href="login.php">Salir</a>
            </div>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://media.istockphoto.com/id/155095451/es/foto/org%C3%A1nicos-miel-con-cuchara-de-madera-contra-blanco.jpg?s=612x612&w=0&k=20&c=05YeLE66zTTbi_rWdu5QDShnhb8F8q4exsZ8cWuWSy0="
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>

</body>
</html>