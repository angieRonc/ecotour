


<?php
// Iniciar la sesión si es necesario
session_start();
$con = mysqli_connect("localhost", "root", "", "ecoturismo");

// Verificar si se recibieron los datos por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados
    $usuario = isset($_POST['user']) ? $_POST['user'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    $pass = md5($password);
    $consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE NomUsuario='$usuario' AND Contrasena='$pass'");

    if (mysqli_num_rows($consulta) > 0) {
        // Si el usuario existe, redirigir a index_b.php
        echo"encontrado";
        //echo '<script type="text/javascript"> alert("Bienvenido Usuario/a"); window.location.href="../index_b.php"; </script>';
    } else {
        // Si no se encuentra el usuario o la contraseña, mostrar un mensaje
        //echo '<script type="text/javascript"> alert("Usuario y contraseña no encontrados"); </script>';
        echo"no encontrado";
    }

    mysqli_close($con);
}
?>








