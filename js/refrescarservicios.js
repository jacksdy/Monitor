 
// Versión: 1.0
// Asdrubal González
// asdrubalgg@gmail.com


$(document).ready(function(){
	$('#refrescarservicios').load('monitorservices.php');
	refresh();
});


function refresh()
{
	setTimeout (function() {
		$('#refrescarservicios' ).fadeOut('fast').load('monitorservices.php').fadeIn('fast');
        
		refresh();
	}, 5000);
}

// $(document).ready(function(){$('#refrescarservicios').load('monitorservices.php');refresh();});function refresh() {setTimeout(function(){$('#refrescarservicios').fadeOut('fast').load('monitorservices.php').fadeIn('slow');refresh();},10000);}