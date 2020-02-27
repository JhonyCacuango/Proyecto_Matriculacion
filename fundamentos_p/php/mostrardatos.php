<?php

require ('cn.php');


if (!$conexion){
  echo 'Error al conectar a la base de datos';    
 }


mysqli_set_charset($conexion,'utf8');

$query ="select * from usuarios" ;

$resultado =  mysqli_query($conexion,$query);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-sacale-1"/>
  
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Datos Registrados</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="/fundamentos_p/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light" background="/fundamentos_p/imagenes/fondo.jpg">
  
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><img src="/fundamentos_p/imagenes/logo.png"width="50" height="50"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/fundamentos_p/index.html">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Contactanos</a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link " href="/prueba.html" tabindex="-1" aria-disabled="true">COMENTARIOS</a>
          </li>
        </ul>
    -->
        
      </div>
    </nav>

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/fundamentos_p/imagenes/logo.png" alt="" width="72" height="72">
        <h2 style="color:white;">Usuarios Registrados</h2>
       </div>

        <!-- Cabecera de la tabla-->
       <section>
        <table class="table" style="color:white;">
        
          <tr>
            <th>ID_Usuario</th>
            <th>Placa</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>Zona</th>
            <th>Fecha</th>
            
            <!-- Obtener los datos de la base de datos por tabla-->
                  <?php
                   while($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

                    echo'<tr>
                      <td>'.$fila['id'].'</td>
                      <td>'.$fila['placa'].'</td>
                      <td>'.$fila['nombre'].'</td>
                      <td>'.$fila['apellido'].'</td>
                      <td>'.$fila['correo'].'</td>
                      <td>'.$fila['direccion'].'</td>
                      <td>'.$fila['zona'].'</td>
                      <td>'.$fila['fecha'].'</td>
                    </tr>';
      
                      
                  }
                  ?> 
          </tr>
        </table>
      </section>
  </div>
</div>


      <footer>
              <center>
              <div class="p-4">
                <h4  style="color:white;"font size=15 class="font-italic">Siguenos En Nuestras Redes Sociales </h4>
                <ol class="list-unstyled">
                  <a href="https://www.youtube.com/"><img src="/fundamentos_p/imagenes/you.png" width="50" height="50"></a></li>
                  <a href="https://www.facebook.com/"><img src="/fundamentos_p/imagenes/face.png" width="50" height="50"></a></li>
                  <a href="https://twitter.com/?lang=es"><img src="/fundamentos_p/imagenes/twi.png" width="50" height="50"></a></li>
                </ol>
              </div>
            </center>
            <br>
          <footer>

  </body>
</html>



