<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<header class="navar1">
        <div class="logo">
            <img src="../img/logo3.png" alt="logotipo">
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
            <img src="../img/usuario.png" alt="usuario">
        </div>
        <div class="logo2">
            <img src="../img/carrito.png" alt="carrito">
        </div>
	</header>

    <br><br><br><br><br>
    <section>
    <div class="container">
    <div class="row">
    <div class="col-md-4">
        <br><br>
        <img src="https://storeassets.im-cdn.com/temp/cuploads/ap-south-1%3Ae2c59ab1-14a0-4095-9f3f-598213c56907/nooraliorganic/products/1638858700196black-seed-honey-500x500.jpeg" alt="">
    </div>

    <div class="col-md-4"></div>

    <div class="col-md-4">
        <div class="center">
            <br><br>
            <h1>Frasco de miel natural 100% oscura</h1>
            <br>
            <h2>$50.00MX</h2>
            <br><br>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-dark">Añadir al carrito</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-warning">Comprar ahora</button> <!-- Nuevo botón -->
                </div>
            </div>
        </div>
        <br>
        <div class="justificado">
            <p>
La miel natural oscura es un producto apreciado por su rica profundidad de sabor y tonalidad más oscura en comparación con la miel clara. Se obtiene de abejas que recolectan néctar de flores con propiedades más intensas y produce una miel con matices robustos y un toque de amargura agradable. Su color oscuro es el resultado de una mayor concentración de minerales y antioxidantes. Esta variante de miel es conocida por su versatilidad en la cocina y sus posibles beneficios para la salud debido a su perfil nutricional único.</p>
        </div>
    </div>
    <hr>
    <div class="center"><H1>Otros productos</H1></div>
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