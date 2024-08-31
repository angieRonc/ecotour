<?php
// Conexión a la base de datos usuario.php
//30/05/2024
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventarioq";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos enviados desde el formulario
$idUsuario = $_POST['idUsuario'];
$nomUsuario = $_POST['nomUsuario'];
$correoUsuario = $_POST['correoUsuario'];
$clave = $_POST['passUser'];

$passUser=md5($clave);

// Insertar los datos en la tabla "usuarios"
$sql = "INSERT INTO usuarios (idUsuario,NomUsuario, Correo,Contrasena) VALUES (NULL,'$nomUsuario', '$correoUsuario', '$passUser')";

if ($conn->query($sql) === TRUE) {
    echo'<script type="text/javascript"> alert(" Datos de Usuario Grabados OK."); location.href ="../index_b.php"; </script>'; 
    
} else {
    echo "Error al ingresar el dato: " . $conn->error;
    header('Location: ../index.php');
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Nuevo Usaurio</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
</head>

<body>
	
</body>

</html>
