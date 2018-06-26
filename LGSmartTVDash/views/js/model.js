/*====================================
=            Sidebar Menu            =
====================================*/

$('.sidebar-menu').tree();

/*==================================
=            Data Table            =
==================================*/

$(".tabela").DataTable( {
} );

$(".tabelag").DataTable( {
	"order": [[ 3, "asc" ]]
} );

//Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });