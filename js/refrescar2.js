

$(document).ready(function(){
	$('#refrescar2').load('dividido1-1-2.php');
	refresh();
});


function refresh()
{
	setTimeout (function() {
		$('#refrescar2' ).fadeOut('slow').load('dividido1-1-2.php').fadeIn('slow');
        
		refresh();
	}, 8000);
}

