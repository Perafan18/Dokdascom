<script>	
    $(document).on("ready",function(){
        $('.carousel').carousel({
    	interval: 2000
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
        		background-image: url(http://dokdas.com/img/p2.jpg);
        	}
        	
        	#div{
			    background-image: url(http://dokdas.com/img/p2.jpg);
			    width: 100%;
			    z-index:-10;
			    height: 600px;
			    position:fixed;
			    background-repeat: no-repeat;
			}
			#div2{
			    background-image: url(http://dokdas.com/img/p3.jpg);
			    width: 100%;
			    z-index:-20;
			    margin-top:400px;
			    height: 1200px;
			    position:absolute;
			}
			form select{
				max-width: 100px;
			}
        </style>
</head>
<body>
	<?echo $header;?>
	    <div id="di" class="hidden-phone">
    		
    	</div>
    	<div id="div" class="hidden-phone">
    		&nbsp;
    	</div>
    	<div id="div2" class="hidden-phone">
    		&nbsp;
    	</div>
	 <div class="container" style="min-height: 1200px;">
        	<div class="row-fluid">
        		<div class="span12" style="margin-top: 50px">
        			<div class="row-fluid">
        				<div class="span4 well">
        					<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-prn1/t1.0-9/10014690_10203251010861274_666535800_n.jpg" class="img-circle"/>
							<div class="visible-desktop text-center">
								<br/><br/>
								<button id="ver_video" class="btn btn-primary btn-large btn-block">Hermosa <i class="icon icon-music icon-white"></i> (Video)</button>
								<br/>
								<iframe id="video" style="display: none" src="https://embed.spotify.com/?uri=spotify:track:50VAUAgOduNwDSvBCcMk2K" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
        					</div>
        				</div>
        				<div class="span8 well">
        					<h3>
        						Alejandra Melendez Reyes
        					</h3>
        					<h4>Descripción</h4>
        					<p>
        						Esta mujer es pequeña pero muy hermosa, puedes platicar horas con ellas sin cansarte , es tan espontanea , tan divertida , tan hermosa en su forma de ser.<br/>
        					</p>
        					<h4>¿Qué me encanta de ella?</h4>
        					<p>
        						<h5>Su forma de ser</h5>
        						Puedes encontrar en ella los gestos más hermosos ,aun cuando po cara de nojada se ve hermosa.
        						<h5>Su sonrisa:</h5>
        						Es tan hermosa que cuado la vez te quedas mudo de tanta belleza <i class="fa fa-heart"></i>.<i class="fa fa-heart"></i>  no puedes creer que una persona pueda tener tanta belleza, su sonrisa emana alegria y felicidad.<br/>
        						<h5>Su risa</h5>
        						La forma en como se rie convinado co su sonrisa es genial , es hermosa su risa.
        						<h5>Sus ojos</h5>
        						Los ojos mas hermosos que podras ver! Tiene un tono cafe tan hermoso que si los ves te quedas hipnotizado<br/>
        						<h5>Para más información consultar en : <a href="https://www.facebook.com/alejandra.melendez.reyes?">http://www.alehermosamelendez.com</a></h5>
        						<h3>
        							Te quiero Ale <i class="fa fa-heart"></i>
        						</h3>
        					</p>
        				</div>
        			</div>
        			<div class="row-fluid visible-desktop">
        				<div class="offset2 span8 well text-center">
        					<button id="ver_video1" class="btn btn-success btn-block btn-large">
        						Ver Video <i class="icon icon-film icon-white"></i>
        					</button><br/>
        					<iframe id="video1" style="display: none" width="700" height="420" src="//www.youtube-nocookie.com/embed/qKCGBgOgp08" frameborder="0" allowfullscreen ></iframe>
        				</div>
        			</div>
        			<h1>
        				Mes 1
        			</h1>
        			<div class="row-fluid">
        				<div class="span6 offset3 well">
        					<div id="myCarousel" class="carousel slide">
				                <ol class="carousel-indicators">
				                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				                  <li data-target="#myCarousel" data-slide-to="1"></li>
				                  <li data-target="#myCarousel" data-slide-to="2"></li>
				                  <li data-target="#myCarousel" data-slide-to="3"></li>
				                </ol>
				                <div class="carousel-inner">
				                  <div class="item active">
				                    <img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xpa1/t1.0-9/10312620_10201109642143485_1012490637455551119_n.jpg" alt="">
				                    <div class="carousel-caption">
				                      <h4>Par de Tortolos <i class="fa fa-heart"></i></h4>
				                      <p>Cuando los 2 nos poniamos todos rojos  y todos nos veian jaja :3 </p>
				                    </div>
				                  </div>
				                  <div class="item">
				                    <img src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/1484210_663358863730752_6514567655843693578_n.jpg" alt="">
				                    <div class="carousel-caption">
				                      <h4>Nuestra Primera Foto! :D <i class="fa fa-facebook-square"></i> <i class="fa fa-instagram"></i></h4>
				                      <p>La priemra foto cerca del parquesito de tu casa <i claas="fa fa-heart"></i> el 24 de Abril :3 </p>
				                    </div>
				                  </div>
				                  <div class="item">
				                    <img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xaf1/t1.0-9/10264606_666683106731661_618025141186985037_n.jpg" alt="">
				                    <div class="carousel-caption">
				                      <h4>La primera cita! :D</h4>
				                      <p>Después de una larga caminata llegamos a un lugar el cual no existia y tuvimos que volve a citadella a tomar un cafe "en la rocas" jajajajaja que bonito dia :D </p>
				                    </div>
				                  </div>
				                  <div class="item">
				                    <img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xaf1/t1.0-9/10414577_682126115187360_1159418435208718385_n.jpg" alt="">
				                    <div class="carousel-caption">
				                      <h4>Vamonos al cine!</h4>
				                      <p>Por causas que desconozco después de tomar un Monster me quede dormido en la pelicula e.e jaja pero quitando eso fue un hermoso di junto a ti <i class="fa fa-heart"></i></p>
				                    </div>
				                  </div>
				                </div>
				                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
				              </div>
        				</div>
        				<div class="span3 well visible-desktop text-center">
        					<button id="ver_video2" class="btn btn-block btn-large btn-danger"> Constantemente miaaa <i class="icon icon-music icon-white"></i><i class="fa fa-heart"></i></button><br/>
        					<div id="video2" style="display: none;font-size:11px;">
	        					<iframe  src="https://embed.spotify.com/?uri=spotify:track:4U6YJ9jp408SoGBleqBfoy" width="240" height="300" frameborder="0" allowtransparency="true"></iframe>
	        					<p>
	        						Solo aquí te imagino junto a mi <br/>
									Se hace eterno el tiempo pensando en ti<br/> 
									Siempre te extraño y entre <br/>
									mis brazos te quiero sentir <br/>
									<br/>
									Constantemente mía, mía… <br/>
									Cierro los ojos y aquí estás <br/>
									Enmedio de mis lagrimas <br/>
									& en todo lo demás <br/>
									<br/>
									Constantemente mía, mía… <br/>
									Te escucho entre cualquier lugar<br/> 
									Abarcas cada palpitar de mi soledad… <br/>
									Constantemente mía, mía <br/>
									Constantemente mía, mía <br/>
									<br/>
	        					</p>
	        					<br/>
        					</div>
        					<a href="https://www.youtube.com/watch?v=oDHPvHZ57dk" class="btn btn-success"><i class="fa fa-youtube fa-2x"></i> Ver Video (Sin Belinda jaja)</a>
        				</div>
        			</div>
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
        $(document).on("ready",function(){
        	$('.carousel').carousel();
        	
        	$("#ver_video").click(function(){
        		$("#video").fadeToggle();
        	});
        	$("#ver_video1").click(function(){
        		$("#video1").fadeToggle();
        	});
        	$("#ver_video2").click(function(){
        		$("#video2").fadeToggle();
        	});
		});
        </script>
</body>
</html>