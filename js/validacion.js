$('#usuario').change(function() {
    $.post('ajax_validacion_usuario.php',{
      usuario:$('#usuario').val(),
  
      beforeSend: function(){
        $('.validacion').html("Espere un momento por favor...");
      }
  
    }, function(respuesta){
      $('.validacion').html(respuesta);
    });
  });
  $('#btn_guardar').hide();
  $('#pass2').change(function(event){
    if ($('#pass1').val() == $('#pass2').val()){
      swal('Correcto','Las contraseñas coinciden','success');
      $('#btn_guardar').show();
    }else {
      swal('Oops!!','Las contraseñas no coinciden','error');
      $('#btn_guardar').hide();
    }
  });
  
  $('.form').keypress(function(e) {
    if (e.which == 13 ) {
      return false;
    }
  });
  