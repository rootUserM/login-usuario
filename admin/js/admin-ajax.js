$(document).ready(function(){
    console.log("Listo!");
   $('#agregar-admin').on('submit',function(e){
                          e.preventDefault();
                  var datos = $(this).serializeArray();
       console.log(datos);
    $.ajax({
        type:$(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType: 'json',
        success : function(data){
            var resultado= data;
            if(resultado.respuesta== 'exito'){
                swal(
  'Listo!',
  'El administrador se agrego correctamente!',
  'success'
)
                
            }else{
        swal({
  type: 'error',
  title: 'Oops...',
  text: 'Algo salio mal!',
  
})        
            }
        }
    })
});
       $('#login-admin').on('submit',function(e){
                          e.preventDefault();
                  var datos = $(this).serializeArray();
       
    $.ajax({
        type:$(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType: 'json',
        success : function(data){
             console.log(data);
            var resultado= data;
            if(resultado.respuesta== 'exitoso'){
                  swal(
  'Bienvenido!',
  'Gusto en tenerte de regreso',
  'success'
)
                setTimeout(function(){
                    window.location.href= 'Adminarea.php';
                },2000)
                    
                
            }else{
              swal({
  type: 'error',
  title: 'Oops...',
  text: 'El usuario o password incorrectos!',
  
})           
            }
            }
        })
});
                  
});