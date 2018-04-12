<?php
require_once('includes/funciones/bd_conexion.php');
if(isset($_POST['nombre'])){
    $nombre =$_POST['nombre'];
}
if(isset($_POST['apellidom'])){
    $apellidom=$_POST['apellidom'];
}
if(isset($_POST['apellidop'])){
    $apellidop= $_POST['apellidop'];
}
if(isset($_POST['correo'])){
    $correo= $_POST['correo'];
}
if(isset($_POST['password_u'])){
    $password= $_POST['password_u'];
}

$opciones = array(
 'cost' => 12
 );

 $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);

try{
 $stmt = $conn->prepare("INSERT INTO usuarios(nombre_u,apellido-p,apellido-m,mail,password) VALUES (?,?,?,?,?)");
   $stmt->bind_param("sssss",$nombre,$apellidop,$apellidom,$correo,$password_hashed);
    $stmt->execute();
     $id_registro= $stmt->insert_id;
    if($id_registro > 0) {
 $respuesta = array(
    'respuesta' => 'exito',
 'id_admin' => $stmt
 );
 } else {
 $respuesta = array(
 'respuesta' => 'error'
 );
 }
 $stmt->close();
 $conn->close();

}catch(Exception $e){
$error = $e-> getMessage();
}
?>

