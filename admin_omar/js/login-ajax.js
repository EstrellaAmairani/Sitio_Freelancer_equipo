$(document).ready(function() {

    $('#login-admin-form').on('submit', function(e) {
        e.preventDefault();
        //console.log("Click!!!");

        var datos =$(this).serializeArray();

        //console.log(datos);
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                console.log(data);
                
                var resultado = data;
                if (resultado.respuesta == 'exitoso'){
                    Swal.fire(
                        'Inicio de sesion correcto!',
                        'Bienvenido(a) '+ resultado.nombre +' !',
                        'success'
                    )

                    setTimeout(function(){
                        window.location.href = 'admin-area.php';
                    }, 2000);

                } else {
                    Swal.fire(
                        'Error',
                        'Usuario o contraseña incorrectos',
                        'error'
                    )
                }
            }
        })
    })
    


});