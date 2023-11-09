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
        <img src="https://media.istockphoto.com/id/185068940/es/foto/miel-frasco-sobre-un-fondo-blanco.jpg?s=612x612&w=0&k=20&c=aS6jaTI8MiczU8BnphVi0HxcTJNcH2PwSFi8293jzRQ=" alt="">
    </div>

    <div class="col-md-4"></div>

    <div class="col-md-4">
        <div class="center">
            <br><br>
            <h1>Frasco de miel natural 100% clara</h1>
            <br>
            <h2>$100.00MX</h2>
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
            <p>La miel natural clara es un producto dulce y viscoso elaborado por las abejas a partir del néctar de las flores. Se caracteriza por su color dorado claro y su sabor suave y delicado. Esta variedad de miel es apreciada por su pureza y versatilidad, utilizada tanto en la cocina como en aplicaciones terapéuticas. La miel clara es conocida por contener una amplia gama de nutrientes beneficiosos y propiedades antioxidantes que la convierten en un alimento saludable y delicioso.</p>
        </div>
    </div>
    <hr>
    <div class="center"><H1>Otros productos</H1></div>
    <br>
    <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://www.nutrisa.com/media/catalog/product/cache/430d9a9e78b1ea4b7c687ab940c02a10/b/4/b4f294fb9951a0793b27da249fca11ab7920fcb360c375afbc1c640114f95f52.jpeg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Paletas</h5>
                        <p class="card-text">visita nuestra tienda en linea y conoce nuestros productos!</p>
                        <a href="#" class="btn btn-dark">Visitar</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://diproansa.com/wp-content/uploads/2018/05/gomamarilla.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Gomitas</h5>
                        <p class="card-text">Al tener una cuenta podras opinar hacerca de nuesros productos y comprar mas facilmente</p>
                        <a href="#" class="btn btn-dark">Visitar</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://s.cornershopapp.com/product-images/3529817.jpg?versionId=n.2ejixVd7P6HYwp9d3va4iym.Vu5SE6" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Caramelos</h5>
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