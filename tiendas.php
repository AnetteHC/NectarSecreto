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
	<header class="navar1">
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

    <br><br><br><br><br>
    <section>
        <br>
        <div class="center">
        <center><a style="font-size: 50px;">Sucursales</a></center>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                Tuxtla Gutierrez
            </div>
            <div class="image-wrapper">
                <img src="https://cdn-icons-png.flaticon.com/512/3721/3721984.png" alt="Imagen" class="card-image">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Calle Cualquiera 123, Cualquier Lugar #1099 colonia siempre feliz</p>
                    </blockquote>
                </div>
            </div>
        </div>

        <br>

        <div class="card">
            <div class="card-header">
                Chiapa de corzo
            </div>
            <div class="image-wrapper">
                <img src="https://cdn-icons-png.flaticon.com/512/3721/3721984.png" alt="Imagen" class="card-image">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Proximamente</p>
                    </blockquote>
                </div>
            </div>
        </div>

        <br>

        <br>

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