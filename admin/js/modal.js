$(document).ready(function() {
        $(document).on('click', '.asignar' ,function(){
            var id=$(this).val();
            var id_sol = $('#id_sol'+id).text();

            $('#modalasignar').modal('show');
            $('#sol').val(id_sol);
        })
});