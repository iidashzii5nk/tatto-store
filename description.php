<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3BPTATTOO</title>
	<link rel="stylesheet" type="text/css" href="css/iconos-menu.css">
	<link rel="stylesheet" type="text/css" href="css/styleflex.css">
	<!--Link de Boostrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!--Scripts para la funcionalidad de boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <!--Scripts para la funcionalidad de boostrap-->


	<script src="https://kit.fontawesome.com/def3cb64a1.js" crossorigin="anonymous"></script><!--FotAwesome-->

  

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script><!--Es un CDN para poder hacer que funcione el jquery menu.js-->

	<script src="js/menu_respons.js"></script>

     
     <script src="js/fot.js"></script>



</head>
<body>
<!--************************************************************-->	
<!------------Contenedor Logo-------------------------------------->
<div class="cont-prin">
<div class="ctn-1"><img class="logo" src="imagenes/logop.jpg"></div>
		    <!--Contenedor del buscador-->
<div class="ctn-2"><input type="text" class="src-prin" name="search" class="src" placeholder="Buscar en nuestra tienda" autocomplete="off"><i class="srcp fas fa-search"></i></div>
      <!--Contenedor negro carrito--> 
 <div class="ctn-3">
 	<div class="ctn-car">
 <div class="ctncarc">
 	<span class="carito">
 		<a href="mostrarCarrito.php">
 		<i class="car fas fa-shopping-cart"></i>
 		CARRITO
 		<span class="vacio">(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);

 		?>)</span>
 	</a>
 	</span>	
 	<div class="inisesion">
 	<a href="iniciosesion.html">
 		<i class="fas fa-arrow-right"></i>
 		Iniciar sesión
 	</a>
 </div>
 </div>
 
 	</div>
 </div>
</div>
<!--************************************************************-->
<header>
	<input type="checkbox" id="btn-menu">
    <label class="icon-th-list" for="btn-menu"></label>

<!------Barra de menu Respons-------------------------------->

<div class="conten-respons"><!--Barra de menu Respons-->
<div id="ctn-icon-search">
	<i class="icon-search" id="icon-search"></i>
</div>
<div id="ctn-icon-cancel">
	<i class="icon-cancel" id="icon-cancel"></i>
</div>
		<div class="cont-respons-logo">
			<img class="logo-tattoo" src="imagenes/logo-black.jpg">
		</div>
		<div class="cont-car-respons">
      		<span class="icon-basket"></span>
      	</div>

</div>
<!------Barra de menu Respons-------------------------------->

<nav class="menu">

   		<ul>
   			<li class="icono-home"><a href="#"><span class="icon-home"></span></a></li>
   	    <li class="submenu"><a id="sub" href="#"><span class="icon-droplet"></span>INK<span class="icon-down-open"></span></a>
        <ul>
        <li><a href="#">INTENZE INK</a></li>
		<li><a href="#">SOLID INK</a></li>
		<li><a href="#">ETERNAL INK</a></li>
		<li><a href="#">RADIANT COLORS</a></li>
		<li><a href="#">DINAMIC INK</a></li>
		<li><a href="#">STARBRITER COLORS</a></li>
		<li><a href="#">PIGMENTOS NEGROS</a></li>
		<li><a href="#">SETS DE PIGMENTOS</a></li>
		</ul>
		</li>
		<li class="submenu"><a href="#"><span class="icon-deviantart"></span>MÁQUINAS<span class="icon-down-open"></span></a>
        <ul>
        <li><a href="#">ROTATIVAS</a></li>
		<li><a href="#">BOBINAS</a></li>
		<li><a href="#">KITS DE TATUAJES</a></li>
		</ul>
		</li>
		<li><a href="#"><span class="icon-pinboard"></span>AGUJAS Y GRIPS</a></li>
		<li><a href="#"><span class="icon-off"></span>FUENTES</a></li>
		<li><a href="#"><span class="icon-paste"></span>ESTÉNCIL</a></li>
		<li class="submenu"><a href="#"><span class="icon-box"></span>ACCESORIOS<span class="icon-down-open"></span></a>
        <ul>
        <li><a href="#">AGUJAS, GRIPS Y PUNTERAS</a></li>
		<li><a href="#">FUENTES DE PODER</a></li>
		<li><a href="#">PEDALES Y CLIPCORD</a></li>
		<li><a href="#">ASEPSIA Y CUIDADO</a></li>
		<li><a href="#">ACCESORIOS</a></li>
		<li><a href="#">ATENCIL</a></li>
		<li><a href="#">MAQUILLAJE PERMANENTE</a></li>
		<li><a href="#">MOBILIARIO</a></li>
		<li><a href="#">DIBUJO</a></li>
		<li><a href="#">LIBROS</a></li>
        </ul>
		</li>
		<li><a href="#"><span class="icon-resize-vertical"></span>PIERCING</a></li>
		<li><a id="modificado" href="#"><span class="icon-certificate"></span>PROMOS!</a></li>
	</ul>
     </nav>

</header>


<script src="js/menu_respons.js"></script>

<div class="icohomenu">
			<a href="index.html">
				<i class="fas fa-home"></i>
				</a>
           <h6> > Descripción del producto</h6>
		</div>

<div class="ctnicohome">
	<div class="ctnsechome">
		
<div class="ctnpadre">
	<div class="ctnhijo1">
		<div class="ctnimgdescription1">		
   
	
<br>

		<?php
$sentencia=$pdo->prepare("SELECT * FROM `productos` WHERE ID = 20");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
?>
 <?php foreach ($listaProductos as $producto){ ?>

<div class="col-15">
	<div class="divOferta">
				<span>¡OFERTA!</span>
				</div>
			<a href="">
            <img 
            title="<?php echo $producto['Nombre'];?>"
            alt="<?php echo $producto['Nombre'];?>"
            class="card-img-top"
            src="<?php echo $producto['Imagen'];?>"
            ></a>
			<div class="card-body">
			
<form action="" method="post">
    
    <input type="hidden" name="id" id="id" 
    value="<?php echo  openssl_encrypt($producto['ID'],COD,KEY);?>"><br>

    <input type="hidden" name="nombre" id="nombre"
    value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>"><br>

    <input type="hidden" name="precio" id="precio"
    value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>"><br>

    <input type="hidden" name="cantidad" id="cantidad"
    value="<?php echo openssl_encrypt(1,COD,KEY);?>"><br>

       
   
</form>
</div>
</div>

<?php } ?>



</div>
</div>
		<div class="ctndescription">
				<div class="nombreproducto">
					<h1>Mustard Intenze</h1>
				</div>
				<div class="nombredescriproducto">
					<div class="descriptionproduc">
						<h2>Pigmento marca Intenze en presentación de 1 onza en tonalidad Mustard Intenze </h2>
					</div>

				</div>
 <div class="card-body">
				<span><?php echo $producto['Nombre'];?></span>
				 
				<h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
 <form action="" method="post">
        <button class="btn btn-primary"
         name="btnAccion"
         value="Agregar"
         type="sumbit">
        AL CARRITO!</button>
    <input type="hidden" name="id" id="id" 
    value="<?php echo  openssl_encrypt($producto['ID'],COD,KEY);?>"><br>

    <input type="hidden" name="nombre" id="nombre"
    value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>"><br>

    <input type="hidden" name="precio" id="precio"
    value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>"><br>

    <input type="hidden" name="cantidad" id="cantidad"
    value="<?php echo openssl_encrypt(1,COD,KEY);?>"><br>
</form>
</div>
<div class="payU">
	<a href="">
	<img src="imagenes/payU.png">
	</a>
</div>
			</div>
			<div class="ctnhijo2">
		
	</div>
	</div>
	
</div>
</div>



		</body>
</html>