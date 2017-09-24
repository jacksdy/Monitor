   <?php include ("conexion.php") ?>
   <div class="row"  id="refrescarservicios">
    <div class="row">
        <br>
        <common-list v-bind:lists="servers"></common-list>
    </div>
  </div>      

    <script type="text/javascript">
    
    Vue.component('common-list', {
      props : ['lists'],
      template:   `<div class="col-md-1" v-for="item in lists">                        
                      <?php    
                        if (@fsockopen("{{item.url}}", {{item.port}})){ 
                        echo "<i class='fa fa-check fa-2x text-success pull-right'></i>";                                    
                         } else {
                        echo "<i class='fa fa-times fa-2x text-danger'></i>";
                        } 
                      ?>
                  </div>
                  <div class="col-md-5"><p> <?php echo {{item.name}} ?></p><hr></div>`,
    });


    var urlServer = 'https://jsonplaceholder.typicode.com/posts';
    new Vue({
      el: '#main',
      created: function() {
        this.getServers(),
      },
      data: {
        Servers: [],
       },
      methods: {
        getServers: function(){
          axios.get(urlServers).then(response => {
            this.servers = response.data
          });
        },
      }
    }); 
  </script>