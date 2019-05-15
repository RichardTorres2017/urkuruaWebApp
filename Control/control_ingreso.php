<?php
 session_start();
require_once('../BBD/conexion.php');
$correo=$_POST['uname'];
$contrasena=$_POST['psw'];
$sql = "SELECT * FROM usuario WHERE usu_correo = ";
$sql.="'".$correo."' ";
$sql.="AND usu_contrasena='".$contrasena."' ";
$result = mysqli_query($con, $sql);
if($result){
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "ingreso correctamen";
    $row = mysqli_fetch_assoc($result);
    
       $sql = "SELECT eje_score FROM Ejercicio WHERE usu_correo = ";
       $sql.="'".$correo."' ";
       $sql.="ORDER BY eje_id DESC" ;
       $result = mysqli_query($con, $sql);
       if($result){
                if (mysqli_num_rows($result) > 0) {
                        $row=mysqli_fetch_row($result);
                        $score = $row[0];
                    }
                else{
                    $score = 0;
                }
           
            $_SESSION['correo'] =$correo;
            $_SESSION['score'] = $score;
            header('Location:../firstScene.php?score='.$score);
     
       } 
       else{
           
           print('FALLLLOO');
           
       }
    
           
       
       
   }
     else {
    
                    header("Location: ../ingreso.php?mensaje=1");
            }
       
}
    
    
else{
    print($sql);
   printf("Errormessage: %s\n", mysqli_error($con));
}



?>
