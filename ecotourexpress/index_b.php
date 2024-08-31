<!DOCTYPE html>
<html lang="es">

<head>
   
   
    <meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcotourExpress (C)2024:.</title>
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 
 
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/main.js"></script>
    
 
<!-- Optional JavaScript   -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 <style>
 
img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}
img {
  border-radius: 10px;
}

#addEq {
  color: white;
}


</style>
    
 
 
    
</head>

<body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                
                <img src="./img/logoet.png"  width="250" height="50" align="center">
                
            </div>
                     
        </div>

        <nav class="navegacion">
            <ul>
				
                <li>
                    <a href="#" onclick="centroDiv()">
                        <ion-icon name="home-outline"></ion-icon>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    
                </li>	
                
                <script>
				function showDiv() {
					var div = document.getElementById("ingreso");
					div.style.display = "block";
					var div1 = document.getElementById("centro");
					div1.style.display = "none";
					
				}
				
				function centroDiv() {
					var div = document.getElementById("centro");
					div.style.display = "block";
					var div1 = document.getElementById("ingreso");
					div1.style.display = "none";
					
					
				}
				
				</script>
					
					
 <!-- menu activiades -->
 <a href="#"  title="Gestion Equipos Biomedicos"><ion-icon name="sunny-outline"></ion-icon><span>Actividades</span></a>

 
 <!-- menu zonas -->
                                
               
 <a href="#" onclick="toggleSubMenu()" title="Buscar Equipo"><ion-icon name="search-circle-outline"></ion-icon><span>Zonas Turisticas</span></a>
  
  
 <!-- menu contactenos -->
     
 <li> <a href="" data-toggle="modal" data-target="#Usuarios"data-whatever="@fat" title="Gestionar Usuarios">
   <ion-icon name="call-outline"></ion-icon>
      <span>Contactenos</span>
                   </a>
</li>              
 
    
 <!-- menu eventos -->     
<a href="#" title="Revisar Informes"><ion-icon name="newspaper-outline"></ion-icon><span>Eventos</span></a>


      
 <!-- menu salir -->
             
             <li>
                    <a href="./index.php"title="Salir"><ion-icon name="exit-outline"></ion-icon><span>Salir</span></a> 
                </li>	   
             
             
            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Drak Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo"></div>
                    </div>
                </div>
            </div>

            <div class="usuario">
                <img src="img/avatart.jpg" alt="Usuario" title="Usuario">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre">Admin</span>
                        <span class="email">Admin@gmail.com</span>
                    </div>
                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                </div>
            </div>
        </div>

    </div>
    <br><br><br><br><br><center>
 <div style="text-align: center;" id="centro" name="centro" style="display: none;">
	   
	   
	   
	   
	   
	<!--   <h1> Software  de Inventario Equ&iacute;pos Biom&eacute;dicos </h1>  -->
	   
		 <picture>
		  <source srcset="./img/fondobm.png" media="(min-width: 600px)" />
		  <img src="./img/fondobm.png" alt="MDN" />
		</picture>

	   
	   
	   
	  <!-- <img style="width: 762px; height: 509px;" alt="Sistema Inventarios BiomediK"title="Sistema Inventarios BiomediK" src="./img/fondo.png"> <br>
	   -->
	   <p align="center"> Biomedik v.1.0 (C)2024</p>
</div>      
         

    <main>
      
      
      
  </main></body>    
 




</html>
