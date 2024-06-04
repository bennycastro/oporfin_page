$(document).ready(function() {
        $(document).on('click', '.asignar' ,function(){
            var id=$(this).val();
            var id_aut = $('#id_aut'+id).text();

            $('#modalasignar').modal('show');
            $('#id_aut').val(id_aut);
        })
});