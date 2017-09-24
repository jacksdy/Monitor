<!-- 
Versión: 1.0
Asdrubal González
asdrubalgg@gmail.com
 -->
<!DOCTYPE html>
<html lang="es">
    <?php include("head.php"); ?>
    <body> 
        <?php include("nav.php"); ?>  
         <div class="container">
    		<div class="panel-group">
    			<div class="panel panel-primary">
                    <div class="panel-heading">Monitor de Servidores</div>
                    <?php include("monitorservices.php"); ?> 
                    <?php include("panelbody.php"); ?> 
                    <?php include("panelfooter.php"); ?>  
                </div>
           </div>
        </div>
        <?php include("scripts.php"); ?>
    </body>
</html>