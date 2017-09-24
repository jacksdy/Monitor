

$(document).ready(function(){
	$('#refrescar1').load('dividido1-1-2.php');
	refresh();
});


function refresh()
{
	setTimeout (function() {
		$('#refrescar1' ).fadeOut('slow').load('dividido1-1-2.php').fadeIn('slow');
        
		refresh();
	}, 9000);
}

