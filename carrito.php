<?php
session_start();

if (isset($_POST['btnAccion'])) {
	switch ($_POST['btnAccion']) {
		case 'Agregar':
			if (is_numeric( openssl_decrypt($_POST['id'], COD, KEY))) {
				$ID=openssl_decrypt($_POST['id'], COD, KEY );
				//echo "Id correcto!";
			}
	        else{
	        	//echo "Id incorrecto";
	        }
	        if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
               $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
	        }else{ echo "Ups... algo pasa con el nombre"; break;}

	        if(is_string(openssl_decrypt($_POST['cantidad'],COD,KEY))){
               $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
	        }else{ echo "Ups... algo pasa con la cantidad"; break;}

	        if(is_string(openssl_decrypt($_POST['precio'],COD,KEY))){
               $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
	        }else{ echo "Ups... algo pasa con el precio"; break;}

            if (!isset($_SESSION['CARRITO'])) {
            	
            	$producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO
            	);
            	$_SESSION['CARRITO'][0]=$producto;
            }else{
                $idProductos=array_column($_SESSION['CARRITO'],"ID");

                if (in_array($ID,$idProductos)) {
                	echo "<script>alert('El producto ya ha sido seleccionado...');</script>";
                }else{

            	$NumeroProductos=count($_SESSION['CARRITO']);
            	$producto=array(
            	'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO
            	);
            	$_SESSION['CARRITO'][$NumeroProductos]=$producto;
            }
            }

			break;
			case 'Eliminar':
				if (is_numeric( openssl_decrypt($_POST['id'], COD, KEY))) {
				$ID=openssl_decrypt($_POST['id'], COD, KEY );
				
				foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
					if ($producto['ID']==$ID){
						unset($_SESSION['CARRITO'][$indice]);
						echo "<script>alert('Elemento borrado....');</script>";
					}
				}
			}else{
	        	echo "Id incorrecto";
	        }
				break;
	}
}
?>