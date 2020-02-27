<?php

require ('cn.php');

$search = $_POST['search'];
$mensaje = "";

if (!$conexion){
  echo 'Error al conectar a la base de datos';    
 }



mysqli_set_charset($conexion,'utf8');

$query ="select * from usuarios where placa like '$search%'" ;

$resultado =  mysqli_query($conexion,$query);

if(mysqli_num_rows($resultado)== 0){

   $mensaje = "<h1 style='color:white;'>No hay registros  que coincidan con su criterio de busqueda.</h1>";
}
?>
    
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-sacale-1"/>
  
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title style="color:white;">Registro de Turno</title>

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
            <a class="nav-link" href="/fundamentos_p/index.html">Inicio<span class="sr-only">(current)</span></a>
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
        <h2 style="color:white;">DATOS DE PLACA INGRESADA</h2>
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
        
        <?php
          echo $mensaje;

        ?>

      </section>
  </div>
</div>
      <footer>   

<CENTER>
<main role="main" class="inner cover">
     <p class="lead">
        <br>
        <br>
        
        <br>
        <br>
      <a href="/fundamentos_p/paginas/buscar.html" class="btn btn-lg btn-secondary">REGRESAR</a>
    </p>
  </main>
                </CENTER>
          <footer>

  </body>
</html>











           




  

