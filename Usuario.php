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
				<li><a href="#">HOME</a></li>
				<li><a href="#">TIENDA</a></li>
				<li><a href="#">NOSOTROS</a></li>
				<li><a href="#">PUNTOS DE VENTA</a></li>
				<li><a href="#">BLOG</a></li>
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
    <div class="container">
    <div class="row">
    <div class="col-md-4">
        <br><br>
        <img src="https://cdn-icons-png.flaticon.com/512/456/456212.png" alt="">
    </div>

    <div class="col-md-4"></div>

    <div class="col-md-4">
        <div class="center">
            <br><br>
            <h1>Bienvenido Emmanuel Lòpez Contreras</h1>
            <br>
            <h2>Informacion del usuario</h2>
            <br>
        </div>
        <br>
        <div class="justificado">
            <h4>Nombre completo:</h4>
            <p>Emmanuel Lòpez Contreras</p>
            <br>
            <h4>Numero fijo:</h4>
            <p>9616717527</p>
            <br>
            <h4>Numero de celular:</h4>
            <p>9612612893</p>
            <br>
            <h4>Correo Electronico:</h4>
            <p>emmanuel.lopez@unach.mx</p>
            <br>
            <div class="center">
                <button type="button" class="btn btn-dark">Cerrar sesion</button>
            </div>
            <br>
        </div>
    </div>
    <hr>
    <div class="center"><H1>Productos comprados recientemente</H1></div>
    <br>
    <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://www.aromesdemorella.com/128-thickbox_default/jabon-avena-y-miel-100gr.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">JABONES</h5>
                        <p class="card-text">visita nuestra tienda en linea y conoce nuestros productos!</p>
                        <a href="#" class="btn btn-dark">Visitar</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://mahaloficial.com/wp-content/uploads/2022/02/shampoo_Miel.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">SHAMPOOS</h5>
                        <p class="card-text">Al tener una cuenta podras opinar hacerca de nuesros productos y comprar mas facilmente</p>
                        <a href="#" class="btn btn-dark">Visitar</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://verbena.co/cdn/shop/products/balsamo_labial_miel_verbena.jpg?v=1637893554" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Balsamo</h5>
                        <p class="card-text">Conoce las tiendas mas cercanas a tu hogar para comprar tus productos favoritos</p>
                        <a href="#" class="btn btn-dark">Visitar</a>
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