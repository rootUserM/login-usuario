 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear administrador
        <small>llena el formulario</small>
      </h1>
      <?php  /*<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li> 
      </ol>*/?>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Agregar adminstrador</h3>

       <?php  /*  <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> 
          </div>*/?>
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
              <!-- /.box-body -->

              <div class="box-footer">
               <input type="hidden" name="agregar-admin" value="1">
                <button type="submit" class="btn btn-primary" >Añadir</button>
              </div>
            </form>
          </div>

        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->
 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php';?>  









