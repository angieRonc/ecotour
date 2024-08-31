<?php //login.php ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<title>Ingreso a EcoturismoExpress 2024</title>
<meta name="generator" content="Geany 1.27" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
<style>
	/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('./img/fondologint.jpg');
  background-size: cover;
  background-position: center center;
}

.green-border {
    border-color: green;
}


	</style>
</head>

<body>
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                         <center>    <img src="./img/logoet.png"  width="250" height="50" align="center"> </center>
                           <!-- <p class="text-muted mb-4">Create a login split page using Bootstrap 4.</p> <h3 class="display-4">BiomediK</h3>
                            -->
                           <form class="p-3 mt-3"  action="./controlador/validarinicio.php" method="post" id="frmlogin" name="frmlogin">
							  <div class="form-group mb-3">
							<input id="user" type="text" name="user" placeholder="Ingrese Usuario" required="" autofocus="" class="form-control rounded-pill border-1 shadow-sm px-4 green-border">
							</div>
							<div class="form-group mb-3">
							<input id="password" name="password" type="password" placeholder="Ingrese Password" required="" class="form-control rounded-pill border-1 shadow-sm px-4 text-primary green-border">
							</div>
                                <button type="button" onclick="validar();" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" id="entrar" name="entrar">Ingresar</button>
                                <div ><p align="center">Ver 1.0 (c) 2024<a href="#" class="font-italic text-muted"> 
                                        <u></u></a></p></div>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('#entrar').click(function(event) {
        event.preventDefault(); // Evita el envío del formulario

        const usuario = $('#user').val();
        const password = $('#password').val();

        if (usuario.trim() === "") {
            alert("Por favor, ingresa tu nombre de usuario.");
            $('#user').focus();
            return false; // Detiene el envío del formulario
        }

        if (password.trim() === "") {
            alert("Por favor, ingresa tu contraseña.");
            $('#password').focus();
            return false; // Detiene el envío del formulario
        }

        // Si ambos campos están llenos, se envían los datos por AJAX
        $.ajax({
    type: "POST",
    url: "./controlador/validarinicio.php",
    data: { user: usuario, password: password },
    success: function(response) {
        if (response.trim() === "encontrado") {
            // Redirigir a index_b.php si la respuesta es "encontrado"
            alert("Bienvenido!!");
            window.location.href = "index_b.php?ok";
        } else {
            // Mostrar mensaje si el usuario no se encuentra
            alert("Usuario no encontrado");
             window.location.href = "index.php?error";
        }
    },
    error: function(xhr, status, error) {
        alert("Ocurrió un error: " + error);
    }
});

    });
});
</script>






</body>

</html>
