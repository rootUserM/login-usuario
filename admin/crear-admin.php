 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear administrador
        <small>llena el formulario</small>
      </h1>
      <?php ?>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Agregar adminstrador</h3>

       <?php ?>
        </div>
        <div class="box-body">
                <!-- form start -->
            <form role="form"  name="agregar-admin" id="agregar-admin" method="post" action="insertar-admin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="usuario">Usuario:</label>
                  <input type="text" class="form-control" id="usuario"  name="usuario" placeholder="usuario">
                </div>
                
                <div class="form-group">
                  <label for="nombre_admin">Nombre de administrador:</label>
                  <input type="text" class="form-control"name="nombre_admin" id="nombre_admin" placeholder="Nombre Administrador">
                </div>

                <div class="form-group">
                  <label for="Password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
            </div>
             
              <div class="box-footer">
               <input type="hidden" name="agregar-admin" value="1">
                <button type="submit" class="btn btn-primary" >Añadir</button>
              </div>
            </form>
          </div>

        </div>
      
        
      </div>
     
    </section>
   
  </div>
  

  <?php include_once 'templates/footer.php';?>  









