
//quitar el parametro de busqueda por default de la tabla
$.extend( $.fn.dataTable.defaults, {
    searching: false,
    ordering:  false
} );