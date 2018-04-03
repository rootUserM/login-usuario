  <?php include_once 'includes/templates/header.php';?>

 <div class="row">
<form action="" class="form-horizontal" method="post" id="formaRegistro" name="formaRegistro">
		        		<div class="form-group">
					    <label class="col-sm-3 control-label">Nombre</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-3 control-label">Apellido Paterno</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="Ap_paterno" name="Ap_paterno" placeholder="Apellido Paterno" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-3 control-label" >Apellido Materno</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="Ap_materno" name="Ap_materno" placeholder="Apellido Materno"required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-3 control-label">Email</label>
					    <div class="col-sm-8">
					      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-3 control-label">Password</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="RegContra" id="RegContra" title="La contraseña debe tener minimo 8 carácteres, mayúsculas y minúsculas" maxlength="8" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off" placeholder="Password">
					    </div>
					  </div>
					  </form>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        <button type="submit" class="btn btn-primary" name="button" value="Registro">Guardar</button>
		      </div>
		      
 <?php include_once 'includes/templates/footer.php';?>
