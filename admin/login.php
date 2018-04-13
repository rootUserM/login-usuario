<?php
session_start();
$cerrar_sesion= $_GET['cerrar_sesion'];
if($cerrar_sesion){
    session_destroy();
}

include_once 'templates/header.php'; 
        ?>
  

  <!-- =============================================== -->
  <body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../index.html"><b>M</b>PC</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar sesion</p>
    
    <form role="form" name="login-admin-form" id="login-admin" method="post" action="insertar-admin.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password"id="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        
        <div class="col-xs-12 ">
         <input type="hidden" name="login-admin" value="1">
          <button type="submit"  class="btn btn-primary btn-block btn-flat">Iniciar sesion</button>
        </div>
        
      </div>
    </form>
    <!-- /.social-auth-links -->
 
  </div>
  
</div>


  <?php include_once 'templates/footer.php';?>  
