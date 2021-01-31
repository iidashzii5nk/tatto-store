<?php
include 'global/config.php';
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
   			<li class="icono-home"><a href="index.php"><span class="icon-home"></span></a></li>
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

<!--Desdes aca empieza el mostrar carrito lo de arriba es del menu-->
<div class="container">
<br>
<?php if (!empty($_SESSION['CARRITO'])) { ?>
<table class="table table-light table-bordered">

	<tbody>
		<tr>
			<th width="40%">Descripción</th>
			<th width="15%" class="text-center">Cantidad</th>
			<th width="20%" class="text-center">Precio</th>
			<th width="20%" class="text-center">Total</th>
			<th width="5%">--</th>
		</tr>
		<?php $total=0; ?>
		<?php foreach ($_SESSION['CARRITO'] as $indice=>$producto) {?>
		<tr>
			<td width="40%"><?php echo $producto['NOMBRE']?></td>
			<td width="15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
			<td width="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
			<td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
			<td width="5%"> 


            <form action="" method="post">
 
            <input 
            type="hidden"
            name="id"
            id="id" 
            value="<?php echo  openssl_encrypt($producto['ID'],COD,KEY);?>">

				<button 
				class="btn btn-danger"
				type="submit"
				name="btnAccion" 
				value="Eliminar" 
				>Eliminar</button>
			</form>
			</td>
		</tr>
		<?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
		<?php }?>
		<tr>
			<td colspan="3" align="right"><h3>Total</h3></td>
			<td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<?php }else{?>
	<div class="alert alert-success">
		No hay productos en el carrito....
	</div>

<?php } ?> 


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