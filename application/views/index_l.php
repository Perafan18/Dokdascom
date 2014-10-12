<script>	
    $(document).on("ready",function(){
        $('.carousel').carousel({
    	interval: 10000
    	});
		$(window).scroll(function(){
			
		    if (window.pageYOffset >= 0 && window.pageYOffset <= 1400) {
		        $('#div').css("background-image","url(http://dokdas.com/img/p2.jpg)");
		        var valor = ((window.pageYOffset)*-1);
		        $('#div').css("background-position","0% "+valor+"px");
		        var r = 480-((window.pageYOffset)/1.8);
		        $('#div').css("margin-top",r+"px");
		        $("#div").css("position","fixed");
		       }else{
		       	var r = 480-((window.pageYOffset)/1.8);
		        $('#div').css("margin-top",r+"px");
		       }
		    
		});
	});
	function ObtenerXHR(){
			req=false;
			if(window.XMLHttpRequest){
				req=new XMLHttpRequest();
			}else{
				if(ActiveXObject){
					var vectorVersiones = ["MSXML2.XMLHttp.5.0","MSXML2.XMLHttp.4.0","MSXML2.XMLHttp.3.0","MSXML2.XMLHttp","Microsoft.XMLHttp"];
					for(var i=0;i<vectorVersiones.length;i++){
						try{
							req= new ActiveXObject(vectorVersiones[i]);
							return req;
						}catch(e){}
					}
				}
			}
			return req;
		}
		
		function primera(){
			var peticion;
		peticion = ObtenerXHR();
		peticion.open("GET","menuajax.php?op=1",true);
		peticion.onreadystatechange = procesarPeticion;
		peticion.send(null);
			
			function procesarPeticion(){
				if(peticion.readyState==4){
					//termino la peticion
					if(peticion.status==200){
						var div = document.getElementById("NumOrdenesListas");
						div.innerHTML = peticion.responseText;
					}
				}
			}
		}
</script>
<style>
        	body{
        		background-color:#FFFFFF;
        		background-image: url(http://dokdas.com/img/p3.jpg);
        	}
        	
        	#div{
			    background-image: url(http://dokdas.com/img/p2.jpg);
			    width: 100%;
			    z-index:-10;
			    margin-top:480px;
			    height: 600px;
			    position:fixed;
			    background-repeat: no-repeat;
			}
			#div2{
			    background-image: url(http://dokdas.com/img/p3.jpg);
			    width: 100%;
			    z-index:-20;
			    margin-top:800px;
			    height: 1200px;
			    position:absolute;
			}
			form select{
				max-width: 100px;
			}
			.minis{
				margin-top: 50px;
				display: none;
			}
			.descripcion{
				text-align: justify;
				color: #fff;
				background: rgba(0,0,0,0.75);
				position: absolute;
			}
			.dentro{
				width:95%;
				margin:2.5%;
			}
			.dentro span{
				font-size: 20px;
			}
			.heart,.estrella{
				color:white;
			}
			.heart:hover{
				cursor: pointer;
				color:red;
			}
			.estrella:hover{
				cursor: pointer;
				color:yellow;
			}
			#box{
				width: 100px;
				height:100px;
				background-color: red;
			}
.progressBar{
			background-color: #3F5666;
			width: 60%;
			margin:0 auto;
			position: relative;
			height: 30px;
		}
		#progreso{
			position: absolute;
			top: 0;
			left: 0;
			width: 0%;
			height: 30px;
			background-color: #F8CA4D;
		}

        </style>
</head>
<body onLoad="inicio()">
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Cambiar Foto de Perfil</h3>
	</div>
	<div class="modal-body">
	<div id="box">
		Suelta aquí tu archivo :)
	</div>
	<div class="progressBar">
		<div id='progreso'></div>
	</div>
		<div class="row-fluid visible-desktop">
    		<div class="span3 offset3 well text-center">
    			<i class="fa fa-picture-o fa-2x"></i> <br>
    			<h5>Subir Imagen</h5>
    			<form  action="<?=base_url("upload/do_upload");?>">
					<input id="foto1" type="file" style="margin-top: -110px;height: 130px;position: absolute;margin-left: -70px;width: 20%;opacity:0">
    			</form>
    		</div>
    		<div>
    		</div>
			<div class="span3 well text-center">
				<i class="fa fa-film fa-2x"></i> <br>
				<h5>Subir galeria</h5>
				<form action="<?=base_url("upload/do_upload");?>">
					<input id="" type="file" style="margin-top: -110px;height: 130px;position: absolute;margin-left: -70px;width: 20%;opacity:0">
				</form>
			</div>
    	</div>

    	<div class="row-fluid visible-tablet">
    		<div class="span3 offset3 well text-center">
    			<i class="fa fa-picture-o fa-2x"></i> <br>
    			<h5>Subir Imagen</h5>
    			<form action="<?=base_url("upload/do_upload");?>">
					<input id="" type="file" style="margin-top: -110px;height: 130px;position: absolute;margin-left: -50px;width: 20%;opacity:0">
				</form>
    		</div>
    		<div>
    		</div>
			<div class="span3 well text-center">
				<i class="fa fa-film fa-2x"></i> <br>
				<h5>Subir galeria</h5>
				<form action="<?=base_url("upload/do_upload");?>">
					<input id="" type="file" style="margin-top: -110px;height: 130px;position: absolute;margin-left: -50px;width: 20%;opacity:0">
				</form>
			</div>
    	</div>

    	<div class="row-fluid visible-phone">
    		<div class="span3 offset3 well text-center">
    			<i class="fa fa-picture-o fa-2x"></i> <br>
    			<h5>Subir Imagen</h5>
    			<form action="<?=base_url("upload/do_upload");?>">
					<input id="" type="file" style="margin-top: -90px;height: 110px;position: absolute;margin-left: -45%;width: 90%;opacity:0">
				</form>
    		</div>
    		<div>
    		</div>
			<div class="span3 well text-center">
				<i class="fa fa-film fa-2x"></i> <br>
				<h5>Subir galeria</h5>
				<input id="" type="file" style="margin-top: -90px;height: 110px;position: absolute;margin-left: -45%;width: 90%;">
			</div>
    	</div>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
		<button class="btn btn-primary">Subir Imagen</button>
	</div>
</div>

	<?echo $header;?>

    	<div id="div" class="hidden-phone">
    		&nbsp;
    	</div>

    <div class="container minis hidden-phone">
    	<div class="row-fluid">
    		<div id="mini" class="span2 offset10">
    			<div class="row-fluid">
	        		<div class="span12">
	        			<div class="row-fluid">
	        				<div class="span5" style="background-color:#f5f5f5;padding:4px;font-size:50%">
        							<i class="fa fa-qq"></i>
        							Alejandra
	        					<img  src="https://scontent-a-lax.xx.fbcdn.net/hphotos-prn1/t1.0-9/10014690_10203251010861274_666535800_n.jpg" class="img-circle"/>
	        				</div>
	        				<div class="span7">
	        					<div class="row-fluid">
	        						<div class="span12 well" style="padding-top:0px;padding-bottom:0px;">
	        							&nbsp;
	        						</div>
	        					</div>
	        					<div class="row-fluid" >
	        						<div class="span12" style="margin-top:-25px;">
			        					<div id="MyCarousel" class="carousel slide">
							                <div class="carousel-inner">
							                  	<div class="item active">
							                  	 	<?=img('img/img3.png');?>
							                  	</div>
							                  	<div class="item">
							                  		<?=img('img/img4.png');?>
											  	</div>
											  	<div class="item">
											  	 	<?=img('img/img5.png');?>
											 	 </div>
							                </div>
										</div>
									</div>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
    		</div>
    	</div>
    </div>
    <div class="container visible-phone ">
    	<div class="row-fluid minis">
    		<div class="span12 well">
    			<i class="icon-arrow-left"></i> Regresar
    		</div>
    	</div>
    </div>

	 <div id="contenedor" class="container" style="min-height: 1800px;">
        	<div class="row-fluid">
        		<div class="span12" style="margin-top: 50px">
        			<div class="row-fluid">
        				<div class="span4 well">
        					<h4>
        						<i class="fa fa-qq"></i>
        						Nombre
        					</h4>

							<div id="edit" data-toggle="modal" data-target="#myModal" style="background-color:black;width: 25px;height: 25px;padding: 10px;border-radius: 25px;color:white;position:absolute;opacity:0;display:none;cursor:pointer">
								<i class="fa fa-pencil fa-2x" ></i>
							</div>

        					<img id="go" src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10253996_660839950649310_2004171768525974661_n.jpg?oh=4cabae11a750f5cbd6534f8549115645&oe=54583233&__gda__=1414114393_7b005ccbe5e1cc5151a320695787cb9e"/>

							<div class="row-fluid">
								<div class="span12">
									<ul class="thumbnails hidden-phone" style="margin-bottom:0px;padding-bottom:0px;margin-top:15px;">
										<li class="span2">
											<a  href="#" class="thumbnail" >
												<img data-src="holder.js/300x200" alt="" src="https://scontent-a-lax.xx.fbcdn.net/hphotos-prn1/t1.0-9/10014690_10203251010861274_666535800_n.jpg">
											</a>
										</li>
										<li class="span2">
											<a href="#" class="thumbnail" >
												<?=img('img/img3.png');?>
											</a>
										</li>
										<li class="span2">
											<a href="#" class="thumbnail" >
												<?=img('img/img3.png');?>
											</a>
										</li>
										<li class="span2">
											<a href="#" class="thumbnail" >
												<?=img('img/img3.png');?>
											</a>
										</li>
										<li class="span2">
											<a href="#" class="thumbnail" >
												<?=img('img/img3.png');?>
											</a>
										</li>
										<li class="span2">
											<a href="#" class="thumbnail" >
												<?=img('img/img3.png');?>
											</a>
										</li>
									</ul>
								</div>
							</div>
        				</div>
        				<div class="span8">
        					<div class="row-fluid">
        						<div class="span12 well">
        							<div class="input-prepend">
										<span class="add-on">13</span>
										<input class="span10" type="text" value="Seguidores" disabled>
									</div>
									<div class="input-prepend">
										<span class="add-on">3</span>
										<input class="span10" type="text" value="Siguiendo" disabled>
									</div>
									<button class="btn btn-primary"  data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Editar Galeria </button>
        						</div>
        					</div>
        					<div class="row-fluid" >
        						<div class="span12" style="margin-top:-25px;">
		        					<div id="myCarousel" class="carousel slide hidden-phone">
						                <ol class="carousel-indicators">
						                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						                  <li data-target="#myCarousel" data-slide-to="1"></li>
						                  <li data-target="#myCarousel" data-slide-to="2"></li>
						                </ol>
						                <div class="carousel-inner">
						                  	<div class="item active">
						                  	 	<?=img('img/img3.png');?>
						                  	 	<div class="carousel-caption">
						                      		<h4>First Thumbnail label</h4>
						                     	 	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						                    	</div>
						                  	</div>
						                  	<div class="item">
						                  	 	<?=img('img/img3.png');?>
						                  	 	<div class="carousel-caption">
						                      		<h4>First Thumbnail label</h4>
						                     	 	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						                    	</div>
						                  	</div>
						                  	<div class="item">
						                  	 	<?=img('img/img3.png');?>
						                  	 	<div class="carousel-caption">
						                      		<h4>First Thumbnail label</h4>
						                     	 	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						                    	</div>
						                  	</div>
						                </div>
									</div>
								</div>
        					</div>
							<div class="row-fluid visible-desktop">
				        		<div class="span3 offset3 well text-center">
				        			<i class="fa fa-picture-o fa-2x"></i> <br>
				        			<h5>Subir Imagen</h5>
									<input id="" type="file" style="margin-top: -90px;height: 110px;position: absolute;margin-left: -90px;width:30;opacity:0">
				        		</div>
				        		<div>
				        		</div>
								<div class="span3 well text-center">
									<i class="fa fa-film fa-2x"></i> <br>
									<h5>Subir galeria</h5>
									<input id="" type="file" style="margin-top: -90px;height: 110px;position: absolute;margin-left: -90px;width:30%;opacity:0">
								</div>
				        	</div>

				        	<div class="row-fluid visible-tablet">
				        		<div class="span3 offset3 well text-center">
				        			<i class="fa fa-picture-o fa-2x"></i> <br>
				        			<h5>Subir Imagen</h5>
									<input id="" type="file" style="margin-top: -110px;height: 130px;position: absolute;margin-left: -50px;width: 11%;opacity:0">
				        		</div>
				        		<div>
				        		</div>
								<div class="span3 well text-center">
									<i class="fa fa-film fa-2x"></i> <br>
									<h5>Subir galeria</h5>
									<input id="" type="file" style="margin-top: -110px;height: 130px;position: absolute;margin-left: -50px;width: 11%;opacity:0">
								</div>
				        	</div>

				        	<div class="row-fluid visible-phone">
				        		<div class="span3 offset3 well text-center">
				        			<i class="fa fa-picture-o fa-2x"></i> <br>
				        			<h5>Subir Imagen</h5>
									<input id="" type="file" style="margin-top: -90px;height: 110px;position: absolute;margin-left: -45%;width: 90%;opacity:0">
				        		</div>
				        		<div>
				        		</div>
								<div class="span3 well text-center">
									<i class="fa fa-film fa-2x"></i> <br>
									<h5>Subir galeria</h5>
									<input id="" type="file" style="margin-top: -90px;height: 110px;position: absolute;margin-left: -45%;width: 90%;opacity:0">
								</div>
				        	</div>
<?/*
				        	<div class="row-fluid" >
				        		<div class="span3 offset3  text-center">
				        			<input id="" type="file" style="margin-top: -170px;height: 110px;width: 100%;">
				        		</div>
				        		<div>
				        		</div>
								<div class="span3 text-center">
									<input type="file" style="margin-top: -170px;height: 110px;width: 100%;">
								</div>
				        	</div>
*/?>

				        	<div class="row-fluid">
				        		<div class="span12 well">
				        			<textarea name="" id="" style="width:85%;max-width:85%;min-width:84%;max-height:100px;" rows="2"></textarea>
					        		<button class="btn btn-primary">Preguntar</button>
					        		<label class="checkbox">
										<input type="checkbox"> Preguntar como anonimo
									</label>
				        		</div>
				        		
				        	</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="row-fluid">
        		<div class="span4 well">
        			<img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10253996_660839950649310_2004171768525974661_n.jpg?oh=4cabae11a750f5cbd6534f8549115645&oe=54583233&__gda__=1414114393_7b005ccbe5e1cc5151a320695787cb9e" alt="">
        			<div id="er1" class="descripcion">
        				<div class="dentro">
        					<i class="fa fa-heart fa-2x heart"></i> <span>10</span>
        					<i class="fa fa-star fa-2x estrella" ></i> <span>4</span>
        				</div>
        			</div>
        			<div id="e1"class="descripcion">
        				<div class="dentro">
        					<b>Hola</b><br>
							Loaesentium vel similique sapiente quia doloribus, aspernatur est facere vitae natus necessitatibus ullam fugit omnis!
        				</div>
        			</div>
        		</div>
        		<div class="span4 well">
        			<img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10253996_660839950649310_2004171768525974661_n.jpg?oh=4cabae11a750f5cbd6534f8549115645&oe=54583233&__gda__=1414114393_7b005ccbe5e1cc5151a320695787cb9e" alt="">
        		</div>
        		<div class="span4 well">
        			<img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10253996_660839950649310_2004171768525974661_n.jpg?oh=4cabae11a750f5cbd6534f8549115645&oe=54583233&__gda__=1414114393_7b005ccbe5e1cc5151a320695787cb9e" alt="">
        		</div>
        	</div>
        	<div class="row-fluid">
        		<div class="span8 well">
        			<img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10457167_701832216550083_4719161771371449206_n.jpg?oh=55c1b73b529bfbbbf836772db9c1398d&oe=54525C83&__gda__=1415003195_5d2d1e8f60a125c96852f208ccc23b2a" alt="">
        			<div id="er2" class="descripcion">
        				<div class="dentro">
        					<i class="fa fa-heart fa-2x heart"></i> <span>10</span>
        					<i class="fa fa-star fa-2x estrella" ></i> <span>4</span>
        				</div>
        			</div>
        			<div id="e2"class="descripcion">
        				<div class="dentro">
        					<b>Hola</b><br>
							Loaesentium vel similique sapiente quia doloribus, aspernatur est facere vitae natus necessitatibus ullam fugit omnis!
        				</div>
        			</div>
        		</div>
        		<div class="span4 well">
        			<img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10253996_660839950649310_2004171768525974661_n.jpg?oh=4cabae11a750f5cbd6534f8549115645&oe=54583233&__gda__=1414114393_7b005ccbe5e1cc5151a320695787cb9e" alt="">
        		</div>
        	</div>
        	<div class="row-fluid">
        		
        		<div class="span4 well">
        			<img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10253996_660839950649310_2004171768525974661_n.jpg?oh=4cabae11a750f5cbd6534f8549115645&oe=54583233&__gda__=1414114393_7b005ccbe5e1cc5151a320695787cb9e" alt="">
        		</div>
        		<div class="span8 well">
        			<img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10457167_701832216550083_4719161771371449206_n.jpg?oh=55c1b73b529bfbbbf836772db9c1398d&oe=54525C83&__gda__=1415003195_5d2d1e8f60a125c96852f208ccc23b2a" alt="">               		
        		</div>
        	</div>

        </div>
        <footer class="navbar navbar-inverse navbar-static-top">
			    <div class="navbar-inner">
				    <div class="container ">
				    	 <ul class="nav">
			    	 		<li class="active"><a href="https://www.facebook.com/pprefanc">Creador  Pedro Perafán</a></li>
			    			<li><a href="#">Desarrolladores</a></li>
			    			<li><a href="#">Contacto</a></li>
			    			<li><a href="#">Politicas de Privacidad</a></li>
				    	</ul>
				    </div>
		   		</div>
        	
        </footer>
        <script>
		// Using multiple unit types within one animation.
		$( "#go" ).click(function() {
			/*$("#contenedor").css("display","none");
			$("#minis").css("display","block");
			$("photo").css("display","block");*/
			$("#contenedor").animate({
				marginLeft : "2500px"
			},1500,function(){
				$("#contenedor").css("display","none");
			});
			setTimeout(function(){
				$(".minis").fadeIn( "slow");
				$("photo").fadeIn( "slow");
			},1500);
		});
		$( ".minis" ).click(function() {
			$(".minis").fadeOut("slow");
			$("#photo").fadeOut("slow");
			setTimeout(function(){
				$("#contenedor").css("display","block");
				$("#contenedor").css("margin","auto");
			},1500);
		});
		var height,width;

		function inicio(){
			width = $('#e1').siblings("img").css("width");
			$("#e1").css("width",width);
			height = $("#e1").css("height");
			$("#e1").css("margin-top","-"+height);

			width = $('#er1').siblings("img").css("width");
			$("#er1").css("width",width);
			height = $("#er1").siblings("img").css("height");
			$("#er1").css("margin-top","-"+height);


			width = $('#e2').siblings("img").css("width");
			$("#e2").css("width",width);
			height = $("#e2").css("height");
			$("#e2").css("margin-top","-"+height);

			width = $('#er2').siblings("img").css("width");
			$("#er2").css("width",width);
			height = $("#er2").siblings("img").css("height");
			$("#er2").css("margin-top","-"+height);
		}

		
		$( "#go" ).mouseover(function() {
			$( "#edit" ).css("display","block");
			$( "#edit" ).animate({
				opacity: 1
			}, 2000);
		}).mouseout(function() {
			$( "#edit" ).animate({
				opacity: 0
			}, 2000,function(){
				$( "#edit" ).css("display","none");
			});
			
		});

	window.addEventListener('load',init);
		function init(){
			var box = document.getElementById('box');
			box.addEventListener('dragover',function(e){e.preventDefault();return false;});
			box.addEventListener('drop',uploadFile);

			var file = document.getElementById("foto1");
			file.addEventListener("change",SubirArchivo);
			
		}
		function SubirArchivo(e){
			alert("Subiendo archivo");
		}
		function uploadFile(e){
			e.preventDefault();
			
			var files = e.dataTransfer.files;

			for(var i = 0;i<files.length;i++){
				var file = files[i];
				var fD = new FormData();
				fD.append('userfile',file);
				
				var ajax = new XMLHttpRequest();
				ajax.open("POST","upload/do_upload",true);
				ajax.addEventListener('load',function(e){
					if(this.status == 200){
						document.querySelector('#box').innerHTML = "Se subió el archivo correctamente :)";
						console.log(this);
					}
					else{
						document.querySelector('#box').innerHTML = "Error al subir el archivo :(";	
					}
				},false);
				document.querySelector('#box').innerHTML = "Subiendo el archivo :|";
				
				ajax.upload.addEventListener('progress',function(e){
					if (e.lengthComputable) {
					    document.querySelector('#progreso').style.width = ((e.loaded / e.total) * 100)+'%';
					}
				},false);
				ajax.send(fD);
			}
   			return false;
		}

		
			
		setInterval(function(){
			inicio();
		},1000);

		</script>
</body>
</html>