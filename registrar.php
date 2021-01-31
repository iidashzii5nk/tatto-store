<?php
include 'global/config.php';
include 'global/conexion.php';

//Recibir los datos y almacenarlos en una variable
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$pass = $_POST["pass"];


//Consulta para insertar
$insertar = "INSERT INTO usuarios(nombre, apellido, correo, pass) VALUES ('$nombre', 
'$apellido', '$correo', '$pass')";


//Validar que no se repitan los correos
$verificar_correo = mysqli_query($pdo, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
	echo '<script>
	      alert("El correo ya está registrado");
	      window.history.go(-1);
	      </script>';
	exit;
}

//Ejecuta consulta
$resultado = mysqli_query($pdo, $insertar);
if (!$resultado) {
	echo "Error al registrarse";
}else{
	echo '<script>
          alert("Usuario registrado exitosamente");
          window.location.replace("http://localhost/store/cuentacreada.html");
	     </script>'; 

}

mysqli_close($pdo);