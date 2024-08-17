$(function () {
    $("#registros").DataTable({
      "responsive": true,
      "pageLength": 5,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "language":{
          paginate:{
              next: 'Siguiente',
              previous:'Anterior',
              last: 'Ultimo',
              first: 'Primero'
            },
            info:'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
            emptyTable: 'No se encontraron resultados',
            infoEmpty: 'Mostrando registros del 0 al 0 de un total de 0 registros',
            search: 'Buscar:'
        }
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

});