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


<!--******************Slider********************************************-->


<div class="ctn-slider">
<ul>
	<li><img  src="imagenes/1.jpg"></li>
    <li><img  src="imagenes/2.jpg"></li>
    <li><img  src="imagenes/3.jpg"></li>
</ul>
	
</div>
<!--*****Slider*******-->

<!--*****Circulos*******-->
	<div class="ctn-cir-pri">

    <div class="ctn-cir-sec">
	 <div class="ctn-circle"><label class="icon-pencil"></label></div>
	 <div class="ctn-ltr-1"><h1 class="ltr-circulo">Esténcil</h1>
	 	<h1 class="ltr-abajo">Todo gran tatuaje empieza con un gran esténcil</h1></div>
	</div>

	<div class="ctn-cir-ter">
	 <div class="ctn-circle"><label class="icon-heart"></label></div>
	 <div class="ctn-ltr-2"><h1 class="ltr-circulo-2">Asepsia y Cuidado</h1>
	 	<h1 class="ltr-abajo-2">Hazlo como un profesional</h1></div>
    </div>

	<div class="ctn-cir-cua">
	 <div class="ctn-circle"><i class="iconkit fas fa-calendar-check"></i></div>
	 <div class="ctn-ltr-3"><h1 class="ltr-circulo-3">Kits de Tattoo</h1>
	 	<h1 class="ltr-abajo-3">Kits con todo lo que necesitas para iniciar</h1></div>
    </div>

	</div>


<!--*****Circulos*******-->

<!--*****Contendor amarillo Promociones*******-->

<div class="promociones">
	<div class="promociones-1">
		<h1 class="ltr-promo">Promociones <h1 class="on-sale">ON SALE!</h1></h1>
	</div>
</div>

<!--*****Contendor amarillo Promociones*******-->

<!--*****Cards*************************************-->
<div class="container">
	
<br>


	<div class="row">
		<?php
		$Nombre_fsdfs;
$sentencia=$pdo->prepare("SELECT * FROM `productos` LIMIT 0, 4");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
?>
 <?php foreach ($listaProductos as $producto){ ?>

<div class="col-3">
			<div class="card">
			<a href="description.php?p=$producto['ID'],COD,KEY);?>">
            <img 
            title="<?php echo $producto['Nombre'];?>"
            alt="<?php echo $producto['Nombre'];?>"
            class="card-img-top"
            src="<?php echo $producto['Imagen'];?>"
            ></a>
			<div class="card-body">
				<span><?php echo $producto['Nombre'];?></span>
				 
				<h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
<form action="" method="post">
    
    <input type="hidden" name="id" id="id" 
    value="<?php echo  openssl_encrypt($producto['ID'],COD,KEY);?>"><br>

    <input type="hidden" name="nombre" id="nombre"
    value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>"><br>

    <input type="hidden" name="precio" id="precio"
    value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>"><br>

    <input type="hidden" name="cantidad" id="cantidad"
    value="<?php echo openssl_encrypt(1,COD,KEY);?>"><br>

        <button class="btn btn-primary"
         name="btnAccion"
         value="Agregar"
         type="sumbit">
        AL CARRITO!</button>
   
</form>
</div>
</div>
</div>

<?php } ?>


</div>
</div>


<!--*****Slider cards***************************************-->


<!--*****Contendor amarillo2 Productos nuevos*******-->

<div class="promociones">
	<div class="promociones-1">
		<h1 class="ltr-promo">Productos nuevos</h1>
	</div>
</div>

<!--*****Contendor amarillo2 Productos nuevos*******-->

<div class="container">
	
<br>


	<div class="row">
		<?php
$sentencia=$pdo->prepare("SELECT * FROM `productos` LIMIT 4, 8");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
?>
 <?php foreach ($listaProductos as $producto){ ?>

<div class="col-3">
			<div class="card">
			
            <img 
            title="<?php echo $producto['Nombre'];?>"
            alt="<?php echo $producto['Nombre'];?>"
            class="card-img-top"
            src="<?php echo $producto['Imagen'];?>"
            >
			<div class="card-body">
				<span><?php echo $producto['Nombre'];?></span>
				 
				<h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
<form action="" method="post">
    
    <input type="hidden" name="id" id="id" 
    value="<?php echo  openssl_encrypt($producto['ID'],COD,KEY);?>"><br>

    <input type="hidden" name="nombre" id="nombre"
    value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>"><br>

    <input type="hidden" name="precio" id="precio"
    value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>"><br>

    <input type="hidden" name="cantidad" id="cantidad"
    value="<?php echo openssl_encrypt(1,COD,KEY);?>"><br>

        <button class="btn btn-primary"
         name="btnAccion"
         value="Agregar"
         type="sumbit">
        AL CARRITO!</button>
   
</form>
</div>
</div>
</div>

<?php } ?>


</div>
</div>

<!--*****Modo de pagos***************************************-->


<div class="ctn-pagos">
     <div class="ctn-pagos-prin">
     	<div class="ctn-pag"><i class="iconpagos fas fa-dolly"></i>
        <h1 class="title">DESPACHOS NACIONALES</h1>
     	</div>
     	<div class="ctn-pag"><i class="iconpagos fas fa-lock"></i>
        <h1 class="title">PAGO SEGURO</h1></div>
     	<div class="ctn-pag"><i class="iconpagos fas fa-comments"></i>
        <h1 class="title-ases">ASESORIA PERSONALIZADA</h1></div>
     	<div class="ctn-pag"><i class="iconpagos fas fa-handshake"></i>
        <h1 class="title">PAGO CONTRA ENTREGA</h1></div>
     </div>	
  
</div>

<!--*****Modo de pagos***************************************-->



<!--*****Banner***************************************-->

<div class="banner">
	<div class="ctn-banner"><img class="bn" src="imagenes/banner.png" alt=""></div>
</div>

<!--*****Banner***************************************-->



<!--*****Puntos Descuantos***************************************-->

<div class="descuentos">
	<div class="ctn-des">

<div class="ctn-puntos">
	<img class="img-hover" src="imagenes/maquina-tatto.png" alt="">
     <div class="ctn-efecto">
     </div>
</div>


	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/fuente.png" alt="">
     <div class="ctn-efecto">
     </div>
	</div>

	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/pigment.png" alt="">
     <div class="ctn-efecto">
     </div>
	</div>

	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/cartuchos.png" alt="">
     <div class="ctn-efecto">	
     </div>
	</div>


	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/clipcord.png" alt="">
     <div class="ctn-efecto">
     </div>
	</div>

	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/stencil.png" alt="">
     <div class="ctn-efecto">
     </div>
	</div>

	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/asepsia.png" alt="">
     <div class="ctn-efecto">	
     </div>
	</div>

	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/accesorios.png" alt="">
     <div class="ctn-efecto">	
     </div>
	</div>


	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/muebles.png" alt="">
     <div class="ctn-efecto">
     </div>
	</div>

	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/libros.png" alt="">
     <div class="ctn-efecto">	
     </div>
	</div>

	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/dibujo.png" alt="">
     <div class="ctn-efecto">	
     </div>
	</div>

	<div class="ctn-puntos">
		<img class="img-hover" src="imagenes/piercing.png" alt="">
     <div class="ctn-efecto">	
     </div>
	</div>
</div>
</div>
	
<!--*****Puntos Descuantos***************************************-->

<!--*****Mas vendido***************************************-->

<div class="tresmasvendi">
	
	<div class="icd">
		<div class="masvendi">
			<img class="int" src="imagenes/intenze.png" alt="">
			<div class="efect-luz"></div>
		</div>
		<div class="masvendi">
			<img class="critical" src="imagenes/critical.png" alt="">
			<div class="efect-luz1"></div>
		</div>
		<div class="masvendi">
			<img class="dynamic" src="imagenes/dynami.png">
			<div class="efect-luz2"></div>
		</div>
	</div>
</div>
<!--*****Top  5 Mas vendido***************************************-->


<div class="promociones">
	<div class="promociones-1">
		<h1 class="ltr-promo">Top 5</h1><h1 class="masven">Más vendidos!</h1>
	</div>
</div>

<!--*****Top  5 Mas vendido***************************************-->

<!--*****Cards 5 productos mas vendidos*********************************-->

<div class="top5">
	<div class="top5prin">
		<div class="card">
			<div class="img"><img src="imagenes/aguja-de-tatuaje-und.jpg" alt=""></div>
			<div class="content">
				
				<div class="title">Aguja und.</div>
				<div class="sub-title">1 000 $</div>
                <div class="btn">
                	<button>AL CARRITO!</button>
                </div>
			</div>
		</div>
		<div class="card">
			<div class="img"><img src="imagenes/puntera-unidad.jpg" alt=""></div>
			<div class="content">
				
				<div class="title">Puntera unidad</div>
				<div class="sub-title">600 $</div>
                <div class="btn">
                	<button>AL CARRITO!</button>
                </div>
			</div>
		</div>
		<div class="card">
			<div class="img"><img src="imagenes/grips-desechables-und.jpg" alt=""></div>
			<div class="content">
				
				<div class="title">Grips desec</div>
				<div class="sub-title">2 000 $</div>
                <div class="btn">
                	<button>AL CARRITO!</button>
                </div>
			</div>
		</div>
		<div class="card">
			<div class="img"><img src="imagenes/cartuchos-con-membrana.jpg" alt=""></div>
			<div class="content">
				
				<div class="title">membr und.</div>
				<div class="sub-title">5 000 $</div>
                <div class="btn">
                	<button>AL CARRITO!</button>
                </div>
			</div>
		</div>
		<div class="card">
			<div class="img"><img src="imagenes/papel-hectografico-kores.jpg" alt=""></div>
			<div class="content">
				
				<div class="title">hecto kores</div>
				<div class="sub-title">3 400 $</div>
                <div class="btn">
                	<button>AL CARRITO!</button>
                </div>
			</div>
		</div>

	</div>
</div>

<!--*****Cards 5 productos mas vendidos*********************************-->

<!--*****CURSOS CERTIFICACIONES GALLERY*********************************-->

<div class="curcer">
	<div class="ctn-curcer">
		<div class="curcergalery">
			<img class="img-cucega" src="imagenes/cursos.png" alt="">
			<div class="efec-luz-blanca"></div>
		</div>
		<div class="curcergalery">
			<img class="img-cucega" src="imagenes/certificaciones.png" alt="">
			<div class="efec-luz-blanca"></div>
		</div>
		<div class="curcergalery">
			<img class="img-cucega" src="imagenes/tattoo-gallery.png" alt="">
			<div class="efec-luz-blanca"></div>
		</div>
	</div>
</div>

<!--*****CURSOS CERTIFICACIONES GALLERY*********************************-->


<!--*****Formulario quienes somos*********************************-->
<div class="ctn-fomulario">
	
<div class="ctn-form">

  <section class="formulario">
   	
   	<ul>
   		<li class="desplegar"><h4>Información</h4>
        <ul>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Promociones especiales</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Novedades</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Los más vendidos</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Contáctenos</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Inicio</a></li>
        	<h6>Developed by @ii5nkiifrancisco</h6>
        </ul>
   		</li>
   	</ul>
</section>

<section class="formulario">
	<ul>
   		<li class="desplegar"><h4>Mi cuenta</h4>
        <ul>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis pedidos</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis facturas por abono</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis direcciones</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis datos personales</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis cupones de descuento</a></li>
        </ul>
   		</li>
   	</ul>
</section>

<section class="formulario">
   	
 <ul>
   		<li class="desplegar"><h4>Información sobre la tienda</h4>

        <ul>
        <li>
        	<h5>Tattoo store</h5>
        	<i class="map fas fa-map-marker-alt"></i>
        	<h3>Calle 4 # 11 - 48</h3>
    </li>
        <li>
         <i class="phon fas fa-phone-alt"></i>
             <h3>Llamanos ahora: 3203927907</h3>
    </li>
    <li>
    	<i class="mail far fa-envelope"><h3>E-mail: contacto@tattoostore.com</h3></i>
          
    </li>

        </ul>
   		</li>
</ul>
</section>

<section class="formulario">
   	<ul>
   		<li class="desplegar"><h4>Siguenos en</h4>
        <ul>
        	<li>
        	<i class="face fab fa-facebook-square"></i>
        	<i class="insta fab fa-instagram-square"></i>
        	<i class="you fab fa-youtube-square"></i>
        	<i class="twit fab fa-twitter"></i>
        </li>
        <li>
        	<h2>Boletín</h2>
        </li>
        <li class="item">
        	<form action="" method="post">
        		<input type="text" name="email" size="18"
        		placeholder="Introduzca su dirección de correo electronico">
                <button type="sumbit"><i class="righ fas fa-chevron-right"></i></button>
        	</form>
        	<span><h2>Registrece para recibir las últimas noticias y actualizaciones
        	directamente en su bandeja de entrada</h2>
        </li>

        </ul>
   		</li>
</ul>
    </section>
</div>
</div>
<!--*****Formulario quienes somos*********************************-->


<!--*****Creador y modo de pagos*********************************-->

<div class="pagcredit">
	<div class="ctn-cp">
		<div class="devpagos">
			<h6>©2020 Powered by 3BPTATTOO. Todos los derechos reservados.</h6>
			<!--Para sacar el Copyright derechos de autos alt +0169-->
		</div>
		<div class="pagos">
			<img src="imagenes/credito-pagos.jpg" alt="">
		</div>
	</div>
</div>
<!--*****Creador y modo de pagos*********************************-->

<!--*****Footer Negro*********************************-->
<div class="footerblack">
	<div class="emoji-descuent">
       <div class="emojicenter">
     <div>
	 <img src="imagenes/iconfinder_Emoji.png" alt="" >
	 </div>
	 <div>
	 <a href="#">Agujas de cartucho 25%OFF</a>
	 </div>
	 <div>
	 <img src="imagenes/iconfinder_Emoji.png" alt="" >
	 </div>
       </div>
	</div>
</div>

<!--*****Footer Negro*********************************-->
</body>
</html>