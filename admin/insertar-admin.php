<?php
include_once 'funciones/funciones.php';
if(isset($_POST['agregar-admin'])){
    $usuario = $_POST['usuario'];
    $nombre_admin = $_POST['nombre_admin'];
    $password = $_POST['password'];


$opciones = array(
 'cost' => 12
 );

 $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
 try {
 $stmt = $conn->prepare("INSERT INTO adminis (usuario, nombre, password) VALUES (?, ?, ?)");
 $stmt->bind_param("sss", $usuario, $nombre_admin, $password_hashed);
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
 } catch (Exception $e) {
 echo "Error: " . $e->getMessage();
 }
 die(json_encode($respuesta));
}


  if(isset($_POST['login-admin'])){
     $usuario = $_POST['usuario'];
      $password = $_POST['password'];
      
      try{
          include_once 'funciones/funciones.php';
 $stmt = $conn->prepare("SELECT * FROM adminis WHERE usuario = ?;");
 $stmt->bind_param("s", $usuario);
 $stmt->execute();
          $stmt -> bind_result($id_admin, $usuario_admin, $nombre_admin,$password_admin);
          if($stmt-> affected_rows){
              $existe= $stmt ->fetch();
              if($existe){
                if(password_verify( $password,$password_admin )){
                     session_start();
                       $_SESSION['usuario']= $usuario_admin;
                       $_SESSION['nombre']= $nombre_admin;
                    $respuesta = array( 
                       'respuesta'=> 'exitoso', 
                       'usuario'=>$nombre_admin); 
                }else{
                    $respuesta = array( 'respuesta'=> 'error'); 
                }
              }else{
                   $respuesta = array(
                  'respuesta' =>'error'
                  );
              }
          }
          $stmt->close();
 $conn->close();
      }catch(Exception $e){
          echo "Error: " . $e->getMessage();
      }
      die(json_encode($respuesta));
    }

 ?>
<?php /* 
<?php 
if(isset ($_POST['usuario'])){
    $usuario = $_POST['usuario'];
}
if(isset ($_POST['nombre_admin'])){
    $nombre_admin=$_POST['nombre_admin'];
}
if(isset ($_POST['password'])){
    $password= $_POST['password'];
}
$opciones = array(
'cost' => 12
);
$password_hashed= password_hash($password, PASSWORD_BCRYPT, $opciones);

try{
    require_once ('funciones/funciones.php');
    $sql="INSERT INTO `adminis`(`id_admin`,`usuario`,`nombre`,`password`)";
    $sql.="VALUES(null,'{$usuario}','{$nombre_admin}','{$password_hashed}');";
    $resultado = $conn->query($sql);
    if($sql->affected_rows){
        $respuesta = array(
        'respuesta'=> 'exito'
        );
            
    }
    
}catch(Exception $e){
$error = $e-> getMessage();
}

?>
*/?>