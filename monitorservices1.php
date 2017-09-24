   <?php include ("conexion.php") ?>
   <div class="row"  id="refrescarservicios">
    <div class="row">
        <br>

        <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url1", $port1)){
                          	$resul=true ;
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          	$resul=false ;
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name1 ?></p><hr></div>

        <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url2", $port2)){ $resul=true ;
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else { $resul=false ;
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name2 ?></p><hr></div>

        <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url3", $port3)){
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name3 ?></p><hr></div>
        

        <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url4", $port4)){
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name4 ?></p><hr></div>

                <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url5", $port5)){
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name5 ?></p><hr></div>
        

        <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url6", $port6)){
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name6 ?></p><hr></div>

                <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url7", $port7)){
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name7 ?></p><hr></div>
        

        <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url8", $port8)){
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name8 ?></p><hr></div>

                <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url9", $port9)){
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name9 ?></p><hr></div>
        

        <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url10", $port10)){
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name10 ?></p><hr></div>

                <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url11", $port11)){
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name11 ?></p><hr></div>
        
        <div class="col-md-1">                        
                        <?php    
                          if (@fsockopen("$url12", $port12)){
                          echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                           } else {
                          echo "<i class='fa fa-times fa-2x text-danger'></i>";
                          } 
                        ?>
        </div>
        <div class="col-md-5"><p> <?php echo $name12 ?></p><hr></div>


    </div>
    </div>
