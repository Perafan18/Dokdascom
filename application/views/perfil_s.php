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
        </style>
</head>
<body>
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
        							<?echo $Nombre;?>
    						<?if($Foto==null){
        						$img = array(
        							'id' => 'go',
        							'src' => 'img/perfil.png',
        							'class' => 'img-circle'
        						);
        						echo img($img);
        					}else{
        						echo '<img src="'.$Foto.'" alt="'.$Nombre.'"/>';
        					}
        					?>
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
        						<?echo $Nombre;?>
        					</h4>
        					<?if($Foto==null){
        						$img = array(
        							'id' => 'go',
        							'src' => 'img/perfil.png'
        						);
        						echo img($img);
        					}else{
        						echo '<img src="'.$Foto.'" alt="'.$Nombre.'"/>';
        					}
        					?>
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
												<img data-src="holder.js/300x200" alt="" src="https://scontent-a-lax.xx.fbcdn.net/hphotos-prn1/t1.0-9/10014690_10203251010861274_666535800_n.jpg">
											</a>
										</li>
										<li class="span2">
											<a href="#" class="thumbnail" >
												<img data-src="holder.js/300x200" alt="" src="https://scontent-a-lax.xx.fbcdn.net/hphotos-prn1/t1.0-9/10014690_10203251010861274_666535800_n.jpg">
											</a>
										</li>
										<li class="span2">
											<a href="#" class="thumbnail" >
												<img data-src="holder.js/300x200" alt="" src="https://scontent-a-lax.xx.fbcdn.net/hphotos-prn1/t1.0-9/10014690_10203251010861274_666535800_n.jpg">
											</a>
										</li>
										<li class="span2">
											<a href="#" class="thumbnail" >
												<img data-src="holder.js/300x200" alt="" src="https://scontent-a-lax.xx.fbcdn.net/hphotos-prn1/t1.0-9/10014690_10203251010861274_666535800_n.jpg">
											</a>
										</li>
										<li class="span2">
											<a href="#" class="thumbnail" >
												<img data-src="holder.js/300x200" alt="" src="https://scontent-a-lax.xx.fbcdn.net/hphotos-prn1/t1.0-9/10014690_10203251010861274_666535800_n.jpg">
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
										<span class="add-on"><?echo $Seguidores;?></span>
										<input class="span10" type="text" value="Seguidores" disabled>
									</div>
									<div class="input-prepend">
										<span class="add-on"><?echo $Siguiendo;?></span>
										<input class="span10" type="text" value="Siguiendo" disabled>
									</div>
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
						                    	<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xfp1/t1.0-9/10268637_10203795017061089_3017112158635430932_n.jpg" alt="">
						                  		<div class="carousel-caption">
						                      		<h4>First Thumbnail label</h4>
						                     	 	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						                    	</div>
						                 	</div>
						                  	<div class="item">
						                  		<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xpa1/t1.0-9/1939732_10203471858582329_1511754374881201519_n.jpg" alt="">
						                  		<div class="carousel-caption">
						                     		<h4>First Thumbnail label</h4>
						                     		<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						                    	</div>
						                  	</div>
						                  	<div class="item">
						                  	 	<?=img('img/img3.png');?>
						                  	</div>
						                </div>
									</div>
								</div>
        					</div>
        					<?if(isset($error)){?>
        					<div class="row-fluid">
        						<div class="span6 offset3">
        							    <div class="alert alert-error">
										    <button type="button" class="close" data-dismiss="alert">&times;</button>
										    <strong><?=$error?></strong> 
									    </div>
        						</div>
        					</div>
        					<?}?>
							<div class="row-fluid">
				        		<div class="span3 offset3 well text-center">
				        			<i class="fa fa-picture-o fa-2x"></i> <br>
				        			<h5>Subir Imagen</h5>
				        			<?php echo form_open_multipart('perfil/subir_foto');?>
									<input onchange="this.form.submit()" name="foto" type="file" style="margin-top: -90px;height: 110px;position: absolute;margin-left: -90px;width:30;opacity:0">
									</form>
				        		</div>
				        		<div>
				        		</div>
								<div class="span3 well text-center">
									<i class="fa fa-film fa-2x"></i> <br>
									<h5>Subir galeria</h5>
									<input type="file" name="galeria" style="margin-top: -90px;height: 110px;position: absolute;margin-left: -90px;width:30%;opacity:0">
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
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="row-fluid">
        		<div class="span4 well">
        			<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xpa1/t1.0-9/r270/559031_10200897953676315_1330484107_n.jpg" alt="">
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
        			<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xpa1/t1.0-9/r270/559031_10200897953676315_1330484107_n.jpg" alt="">
        		</div>
        		<div class="span4 well">
        			<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xpa1/t1.0-9/r270/559031_10200897953676315_1330484107_n.jpg" alt="">
        		</div>
        	</div>
        	<div class="row-fluid">
        		<div class="span8 well">
        			<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xfp1/t1.0-9/10268637_10203795017061089_3017112158635430932_n.jpg" alt="">
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
        			<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xpa1/t1.0-9/r270/559031_10200897953676315_1330484107_n.jpg" alt="">
        		</div>
        	</div>
        	<div class="row-fluid">
        		
        		<div class="span4 well">
        			<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xpa1/t1.0-9/r270/559031_10200897953676315_1330484107_n.jpg" alt="">
        		</div>
        		<div class="span8 well">
        			<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xfp1/t1.0-9/10268637_10203795017061089_3017112158635430932_n.jpg" alt="">               		
        		</div>
        	</div>
        	<div class="row-fluid">
        		
        		<div class="span6 well">
        			<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xfp1/t1.0-9/10268637_10203795017061089_3017112158635430932_n.jpg" alt="">
        		</div>
        		<div class="span6 well">
        			<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xfp1/t1.0-9/10268637_10203795017061089_3017112158635430932_n.jpg" alt="">               		
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
			
		setInterval(function(){
			inicio();
		},1000);

		</script>
</body>
</html>