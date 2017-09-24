

   <?php include ("conexion.php") ?>
          
  <?php    
    if (@fsockopen("$url1", $port1)){
    	$resul1='true' ;
    } else {
    	$resul1='false' ;
    } 

    if (@fsockopen("$url2", $port2)){ 
      $resul2='true' ;
     } else { 
      $resul2='false' ;
     } 

    if (@fsockopen("$url3", $port3)){
      $resul3='true' ;
     } else {
      $resul3='false' ;
    } 

    if (@fsockopen("$url4", $port4)){
      $resul4='true' ;
     } else {
      $resul4='false' ;     
    } 

    if (@fsockopen("$url5", $port5)){
      $resul5='true' ;    
     } else {
      $resul5='false' ;
    } 

    if (@fsockopen("$url6", $port6)){
      $resul6='true' ;    
     } else {
      $resul6='false' ;
     } 

    if (@fsockopen("$url7", $port7)){
      $resul7='true' ;    
     } else {
      $resul7='false' ;
    } 

    if (@fsockopen("$url8", $port8)){
      $resul8='true' ;    
     } else {
      $resul8='false' ;
    } 

    if (@fsockopen("$url9", $port9)){
       $resul9='true' ;
     } else {
      $resul9='false' ;
    } 

    if (@fsockopen("$url10", $port10)){
      $resul10='true' ;    
     } else {
      $resul10='false' ;
    } 

    if (@fsockopen("$url11", $port11)){
      $resul11='true' ;    
     } else {
      $resul11='false' ;
    } 

    if (@fsockopen("$url12", $port12)){
      $resul12='true' ;    
      } else {
      $resul12='false' ;
    } 
  ?>