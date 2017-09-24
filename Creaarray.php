<!--   <?php
    // $archivo = file( "serv.txt" );
   //  $lineas = count( $archivo );

    // for( $i = 0; $i < $lineas; $i++ )
      //   $aUrls[$i] = $archivo[$i];

     //print_r( $aUrls );
    // echo $aurls;
?>  -->
<?php include ("servers.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="./css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<ul id="main">
		<common-list v-bind:lists="posts"></common-list>
	</ul>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.min.js"></script>
	<script type="text/javascript">
		
		Vue.component('common-list', {
			props	: ['lists'],
			template: 	`<ul class="list-group">
							<li v-for="item in lists" class="list-group-item">
								{{ item.port }}
							</li>
						</ul>`,
		});

		new Vue({
			el: '#main',
			created: function() {
				this.getPosts(),
			},
			data: {
				posts: [],
			},
			methods: {
				getPosts: function(){
					axios.get(sersver).then(response => {
						this.posts = response.data
					});
				},
			}
		});	
</body>
</html>