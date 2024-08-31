<!DOCTYPE html>
<html>
<head>
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"><!--para mostrar las tildes-->
	<title>Listado de Equipos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
    
   <!-- https://programacionconphp.com/ordenar-y-paginar-tablas-dinamicas-con-datatables-jquery-y-php/
 -->
 
 <style>
 
 @media print{

  .oculto-impresion, .oculto-impresion *{

    display: none !important;

  }

}
 
 </style>
</head>
<body>
     <div>
		 <H1>Reporte de Equipos &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger oculto-impresion" onclick="window.location='../index_b.php'">Close</button>
		  <input type="image" class="oculto-impresion" src="../img/print.png" alt="Imprimir" title="Imprimir" height ="30" width="40" onclick="window.print();"> 
		 </H1>
<div class="table-responsive-md">
	
    <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='25' class="table  table-striped table-hover table-bordered">
	 <thead class="thead-dark">
                <tr>
                    <th>IdEquipo</th>
                    <th>Cantidad</th>
                    <th>Descripción</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Número de Serie</th>
                    <th>Accesorios</th>
                    <th>Fecha de Instalación</th>
                    <th>Ubicación</th>
                    <th>Área</th>
                    <th>Activo</th>
                    <th>Proveedor</th>
                    <th>Observaciones</th>
                   <!-- <th>Foto</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
               
              header("Content-Type: text/html;charset=utf-8");
                
                // Conexión a la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "inventarioq";

                $conn = new mysqli($servername, $username, $password, $dbname);
                $conn->set_charset("utf8");//para mostrar las tildes
                // Verificar la conexión
                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }

                // Consulta SQL para obtener los datos de la tabla equipos
                $sql = "SELECT * FROM equipos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Mostrar los datos en la tabla
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['IdEquipo'] . "</td>";
                        echo "<td>" . $row['Cantidad'] . "</td>";
                        echo "<td>" . $row['Descripcion'] . "</td>";
                        echo "<td>" . $row['Marca'] . "</td>";
                        echo "<td>" . $row['Modelo'] . "</td>";
                        echo "<td>" . $row['NumSerie'] . "</td>";
                        echo "<td>" . $row['Accesorios'] . "</td>";
                        echo "<td>" . $row['FechaInst'] . "</td>";
                        echo "<td>" . $row['Ubicacion'] . "</td>";
                        echo "<td>" . $row['Area'] . "</td>";
                        echo "<td>" . $row['Activo'] . "</td>";
                        echo "<td>" . $row['Proveedor'] . "</td>";
                        echo "<td>" . $row['Observaciones'] . "</td>";
                       // echo "<td>" . $row['Foto'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No se encontraron registros.";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--datatables-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <script type="text/javascript" src="./js/datatable.js"></script>
  <!--datatables-->
    
</body>
</html>
