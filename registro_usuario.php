<?php 
try{
    require_once('includes/funciones/bd_conexion.php');
}catch(Exception $e){
    $error = $e->getMessage();
}
?> 
  <?php include_once 'includes/templates/header.php';?>
<section class="form-registro">
 <div class="contenedor">
                <form action="crear_usuario.php" method="post" id="crear_usuario" name="crea_usuario" class="form-horizontal">
                <div class="form-group">
                    <label for="nombre" class="col-sm-3 control-label">Nombre</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Alberto" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="apellido" class="col-sm-3 control-label">Apellido Paterno</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="apellidop" id="apellidop" placeholder="Hernandez" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="numero" class="col-sm-3 control-label">Apellido materno </label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="apellidom" id="apellidom" placeholder="Rosales" required>
                   </div>
                </div>
                   <div class="form-group">
                    <label for="numero"  class="col-sm-3 control-label">Correo </label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" name="correo" id="correo" placeholder="nombre@dominio.com" autocomplete="off" required>
                   </div>
                </div>
                 <div class="form-group">
                    <label for="password_u" class="col-sm-3 control-label">Password </label>
                     <div class="col-sm-8">
                    <input type="password" class="form-control" name="password_u" id="password_u" placeholder="password" autocomplete="off" required>
                </div>
                </div>
                <div class="modal-footer">
                 <button type="button" class="btn btn-default">Cancelar</button>
		        <button type="submit" class="btn btn-primary" name="button" value="Registro">Registrar</button>
           </div>
             </form>
</div>
 
		      </section>
 <?php include_once 'includes/templates/footer.php';?>
