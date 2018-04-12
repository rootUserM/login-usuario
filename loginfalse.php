<!Doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- Fonts google -->
        <link href="https://fonts.googleapis.com/css?family=Anton|Josefin+Sans|Rubik" rel="stylesheet">
        <!-- stylesheet-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/vendor/slider.js"></script>
<script src="js/bootstrap.min.js"></script>
    </head> 
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
     
        <section  class="header clearfix">
         
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#" >Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="nosotros.php">Nosotros</a>
    </li>
<!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Servicios
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Hardware</a>
        <a class="dropdown-item" href="#">Sofware</a>
     </div>
    </li>
    
 <li class="nav-item">
       <a class="nav-link" href="#">Contacto</a>
    </li>
     <li class="nav-item fr">
     <a href="#myModal" class="nav-link" data-toggle="modal">Iniciar sesion</a>
</li>

  </ul>
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">login</h4>
        </div>
        <div class="modal-body">
<h6 style="color:red;">El correo o la contraseña son incorrectos</h6>
          <form action="login.php">
  <div class="form-group">
    <label for="direccion">Correo</label><br>
   <input type="mail" class="form-control" id="cantidad">
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="cantidad">
  </div>

  
</form>

        </div>
        <div class="modal-footer">
        <button type="submit" class="btn fl"><a href="registro.php">Registrarse</a></button>
         <button type="submit" class="btn btn-default">Entrar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</nav>
            </section><!-- End contanier-->
        </header><!-------------------------------------------------------- End header-->

<?php include_once 'includes/templates/footer.php';?>