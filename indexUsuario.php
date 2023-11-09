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
	<header>
        <div class="logo">
            <img src="./img/logo3.png" alt="logotipo">
        </div>
		<nav>
			<ul class="link">
				<li><a href="./indexUsuario.php">HOME</a></li>
				<li><a href="./tienda.php">TIENDA</a></li>
				<li><a href="./nosotros.php">NOSOTROS</a></li>
				<li><a href="./tiendas.php">PUNTOS DE VENTA</a></li>
				<li><a href="./blog.php">BLOG</a></li>
			</ul>
		</nav>
        <div class="logo2">
            <a href="Usuario.php">
            <img src="./img/usuario.png" alt="usuario">
        </div>
        <div class="logo2">
            <a href="carrito.php">
            <img src="./img/carrito.png" alt="carrito">
        </div>
	</header>
	<section class="zona1"></section>
	<section>
        <div class="center">
        <center><a style="font-size: 50px;">TIENDA DE MIEL #1 EN MEXICO</a></center>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://hips.hearstapps.com/hmg-prod/images/miel-1662806527.jpg?crop=0.670xw:1.00xh;0,0&resize=1200:*" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Miel pura</h5>
                        <p class="card-text">Nuestra miel es 100% extraida de las abejas sin tratamiento artificial</p>
                        <a href="./tienda.php" class="btn btn-dark">Visitar</a>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://www.gob.mx/cms/uploads/article/main_image/96223/HUELLA_ECOL_GICA_3.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Ecologica</h5>
                        <p class="card-text">El precio de nuestros productos se ajusta a su bolsillo mientras ayudamos al medio ambiebte</p>
                        <a href="./tienda.php" class="btn btn-dark">Visitar</a>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://www.gob.mx/cms/uploads/article/main_image/36463/productos-abeja.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Productos variados</h5>
                        <p class="card-text">Aparte de la miel contamos con productos de bellesa y decoracion del hogar</p>
                        <a href="./tienda.php" class="btn btn-dark">Visitar</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="center">
                    <h1>COMIENZA A NAVEGAR YA!!!</h1>
                </div>

                <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://cdn-icons-png.flaticon.com/512/4090/4090490.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Compra en linea</h5>
                        <p class="card-text">visita nuestra tienda en linea y conoce nuestros productos!</p>
                        <a href="./tienda.php" class="btn btn-dark">Visitar</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://cdn-icons-png.flaticon.com/512/3891/3891544.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Perfil de usuario</h5>
                        <p class="card-text">Al tener una cuenta podras opinar hacerca de nuesros productos y comprar mas facilmente</p>
                        <a href="./Usuario.php" class="btn btn-dark">Visitar</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://citei.com.mx/site/assets/files/1241/punto_de_venta_mesa_de_trabajo_1.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Puntos de venta</h5>
                        <p class="card-text">Conoce las tiendas mas cercanas a tu hogar para comprar tus productos favoritos</p>
                        <a href="./tiendas.php" class="btn btn-dark">Visitar</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
	</section>

	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>

<footer>
    <P>Boulervard Belizario Domìnguez, kilometro 1081, sin numero. Teràn Tuxtla Gutierrez, Chiapas.</P>
    <p>&copy; 2023 Derechos reservados</p>
</footer>
</body>
</html>
</html>