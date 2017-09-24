

$(document).ready(function(){
	// $('#refrescar').load('divide.php');
        $('#refrescar').load('dividido1-1-2.php');

	refresh();
});


function refresh()
{
	setTimeout (function() {
		// $('#refrescar' ).fadeOut('slow').load('divide.php').fadeIn('slow');
        $('#refrescar' ).fadeOut('slow').load('dividido1-1-2.php').fadeIn('slow');
		refresh();
	}, 8000);
}

