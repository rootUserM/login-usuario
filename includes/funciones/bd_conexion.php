<?php
 $conn= new mysqli('localhost','root','root','mpc-database');
if($conn->connect_error){
    echo $error->$conn-connect_error;
}
?>