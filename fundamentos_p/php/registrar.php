<?php
include 'cn.php';
//Recibir los datos y alamacenarlos en variables
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$placa = $_POST['placa'];
$zona = $_POST['zona'];
$fecha = $_POST['fecha'];


//Consulta Para Insertar
$insertar = "INSERT INTO usuarios(nombre, apellido, correo, direccion, placa, zona, fecha) VALUES('$nombre', 
'$apellido', '$correo','$direccion', '$placa', '$zona', '$fecha')";

$verificar_placa = mysqli_query($conexion, "SELECT * FROM usuarios WHERE placa = '$placa'");
if(mysqli_num_rows($verificar_placa) > 0){
    echo '<script>
          alert("Placa ya registrada");
          window.history.go(-1);
          </script>';
    exit;
}


$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '<script>
          alert("El usuario ya esta registrado");
          window.history.go(-1);
          </script>';
    exit;
}

$verificar_fecha = mysqli_query($conexion, "SELECT * FROM usuarios WHERE fecha = '$fecha'");
if(mysqli_num_rows($verificar_fecha) > 0){
    echo '<script>
          alert("La Fecha y hora seleccionada se encuentra ocupada");
          window.history.go(-1);
          </script>';
    exit;
}

if(isset($_POST['sumbit'])){
    if(empty($placa)>7){
      echo "<p class='error'>* El nombre es muy largo</p>";
    }
}


//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo 'Error al registrarse';
}   else{
    echo '<script>
          alert("Usuario Registrado Con Exito..!!");
          location.href ="/fundamentos_p/php/mostrardatos.php";
          </script>';
    

}
//Cerrar Conexion
mysqli_close($conexion);