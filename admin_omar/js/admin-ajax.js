$(document).ready(function() {

    $('#guardar-registro').on('submit', function(e) {
        e.preventDefault();
        console.log("Click!!!");

        var datos = $(this).serializeArray();

        console.log(datos);
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                console.log(data);

                var resultado = data;
                if (resultado.respuesta == 'exito'){
                    Swal.fire(
                        'Correcto!',
                        'Se guardo correctamente',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'Error',
                        'Hubo un error',
                        'error'
                    )
                }
            }
        })
    })



    $('.borrar-registro').on('click', function(e) {
        e.preventDefault();

        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');

        Swal.fire({
            title: '¿Esta seguro?',
            text: "No se podra revertir esta operación!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminalo!',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'post',
                    data:{
                        'id': id,
                        'registro': 'eliminar'
                    },
                    url: 'modelo-'+ tipo + '.php',
                    success: function(data){
        
                        console.log(data);
        
                        var resultado = JSON.parse(data);
        
                        console.log(resultado);
        
        
        
                        if (resultado.respuesta == 'exito'){
                            Swal.fire(
                                'Eliminado!',
                                'Registro Eliminado',
                                'success'
                            )
        
                            $('[data-id="'+ resultado.id_eliminado +'"]').parents('tr').remove();
        
                        } else {
                        Swal.fire(
                            'Error',
                            'Hubo un error',
                            'error'
                        )
                        }
                    }
                })
              
            }
          })

        
    })
    


});