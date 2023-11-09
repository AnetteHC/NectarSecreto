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
        <center><a style="font-size: 50px;">Puntuaciones de nuestros clientes</a></center>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                Nicol Lòpez
            </div>
            <div class="image-wrapper">
                <img src="https://cdn.icon-icons.com/icons2/2030/PNG/512/user_icon_124042.png" alt="Imagen" class="card-image">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>La miel que vendes es absolutamente genial! Su sabor es excepcional y la calidad es insuperable. No puedo dejar de elogiar este producto. Es el acompañamiento perfecto para mi té y tostadas. ¡No puedo vivir sin ella! ¡Gracias por ofrecer una miel tan deliciosa y de alta calidad!</p>
                    </blockquote>
                </div>
            </div>
            <div class="card-footer">
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
            </div>
        </div>

        <br>

        <div class="card">
            <div class="card-header">
                Emmanuel Lòpez
            </div>
            <div class="image-wrapper">
                <img src="https://cdn.icon-icons.com/icons2/2030/PNG/512/user_icon_124042.png" alt="Imagen" class="card-image">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>¡No solo son tus productos deliciosos, sino que el diseño de tu página web es asombroso! Navegar por tu sitio es una experiencia placentera, y la presentación de tus productos es simplemente impresionante. Desde la primera vez que visité tu tienda en línea, supe que estaba en el lugar correcto. Tus productos son tan sabrosos como se ven, ¡y no puedo tener suficiente de ellos! ¡Sigue haciendo lo que haces, porque es fenomenal!</p>
                    </blockquote>
                </div>
            </div>
            <div class="card-footer">
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
            </div>
        </div>

        <br>

        <div class="center">
        <button type="button" class="btn btn-dark">Agregar comenatario</button>
        </div>

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