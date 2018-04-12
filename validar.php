<?php
if(isset($_POST['correo'])){
    $correo= $_POST['correo'];
}
if(isset($_POST['password'])){
    $password= $_POST['password'];
}
try {
   require_once('includes/funciones/bd_conexion.php');
    $sql="SELECT * FROM usuarios WHERE mail='$correo' and password='$password'";
$resultado=mysqli_query($conn,$sql);
    $filas=mysqli_num_rows($resultado);
}catch(Exception $e){
    $error= $e->getMessage();
}
if($filas>0){
    header("location:index.php")
}else{
    echo "La contraseña o el correo no son validos";
}
mysqli_free_result($resultado);
mysqli_close($conn);    
?>