$(document).ready(function() {
    $('#crear-admin').on('submit', function(e) {
            e.preventDefault();

            var datos = $(this).serialize(); 

            $.ajax({
                type: $(this).attr('method'),
                data: datos,
                url: $(this).attr('action'),
                dataType: 'json',             
                success: function(data) {
                    console.log(data);
                    if(data.respuesta == 'correcto') {
                        swal(
                            'Registro Exitoso!',
                            'Se agregó correctamente!',
                            'success'
                        )
                    } else {
                        swal(
                            'Error...',
                            'Hubo un error al enviar su información!',
                            'error'
                        )
                    }
                }
            });
    });
});