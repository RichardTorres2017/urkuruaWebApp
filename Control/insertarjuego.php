<?php
require_once('../BBD/conexion.php');
 $nombre = $_GET['nombre'];
$puntaje = $_GET['punt'];
$correcto = $_GET['correcto'];



$sql = sprintf("INSERT INTO Ejercicio (usu_correo,eje_correcto,eje_score,eje_fecha) VALUES ('%s','%s','%s',NOW()) ",$nombre,$correcto,$puntaje);

$result = mysqli_query($con, $sql);
if($result){
 
    print("insertado");
    print($nombre);
  // header("Location: ../ingreso.php?mensaje=1");

}
else{
    print($sql);
   printf("Errormessage: %s\n", mysqli_error($con));
}







?>