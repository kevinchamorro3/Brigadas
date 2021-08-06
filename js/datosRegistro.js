//Pasar informacion a los modals
$('#editarRegistroModal').on('show.bs.modal', function (event){
     var button = $(event.relatedTarget) // Button that triggered the modal
    var codigo = button.data('codigo') 
    $('#idRegistro').val(codigo)
    var usu = button.data('usu') 
    $('#registro').val(usu)
    var iper = button.data('iper')
    $('#idPe').val(iper)
    var clave = button.data('clave')
    $('#clave').val(clave)
    var cedula = button.data('cedula')
    $('#cedu').val(cedula)
    var nom = button.data('nom')
    $('#nombres').val(nom)
    var ape = button.data('ape')
    $('#apellido').val(ape)
    var dir = button.data('dir')
    $('#dire').val(dir)
    var correo = button.data('correo')
    $('#correo').val(correo)
    var tel1 = button.data('tel1')
    $('#telefo').val(tel1)
    var tel2 = button.data('tel2')
    $('#tele2').val(tel2)
    
  
    
})
$('#eliminarRegistroModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var codigo = button.data('codigo') 
    $('#eliminar').val(codigo)
  })
  
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
//Solo numeros
$('.solo-numeros').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
    });
//solo letras 
    $(".solo-letras").keypress(function (key) {
        window.console.log(key.charCode)
        if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
            && (key.charCode < 65 || key.charCode > 90) //letras minusculas
            && (key.charCode != 45) //retroceso
            && (key.charCode != 241) //ñ
             && (key.charCode != 209) //Ñ
             && (key.charCode != 32) //espacio
             && (key.charCode != 225) //á
             && (key.charCode != 233) //é
             && (key.charCode != 237) //í
             && (key.charCode != 243) //ó
             && (key.charCode != 250) //ú
             && (key.charCode != 193) //�?
             && (key.charCode != 201) //É
             && (key.charCode != 205) //�?
             && (key.charCode != 211) //Ó
             && (key.charCode != 218) //Ú
            )
            return false;
    });
    //validacion de llenado de campos
    // Disable form submissions if there are invalid fields
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
