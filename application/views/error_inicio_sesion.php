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
        </style>
</head>
<body>
	<?echo $header;?>

    	<div id="div" class="hidden-phone">
    		&nbsp;
    	</div>
    	<div id="div2" class="hidden-phone">
    		&nbsp;
    	</div>
    	<div class="row-fluid">
    		<div class="span10 offset1">
    			<h2>Upss.. Hubo un error al intentar iniciar sesión</h2>
    			<div class="row-fluid">
    				<div class="span6 well offset3 text-center">
    					<div class="row-fluid">
    						<div class="span10 offset1">
    							<h4 class="text-error">Error :
		    						<?php
									switch ($numero) {
										case 1:
										echo "No se capturaron los campos";
											break;
										case 2:
										echo "El usuario no existe";
											break;
										case 3:
										echo "Usuario y/o contraseña incorrectos";
											break;
										default:
											echo "Error desconocido :S";
											break;
									}	
									?>
		    					</h4>
		    					<form class="form-horizontal" action="http://www.dokdas.com/welcome/iniciar" method="post">
								    <div class="control-group">
								    	<label class="control-label">Correo Electronico</label>
									    <div class="controls">
									    	<input type="text" name="Usuarios" id="Usuarios" placeholder="Correo Electronico">
									    </div>
								    </div>
								    <div class="control-group">
									    <label class="control-label">Password</label>
									    <div class="controls">
									    	<input type="password" name="Contra" id="Contra" placeholder="Password">
									    </div>
								    </div>
								    <div class="control-group">
									    <div class="controls">
									    	<label class="checkbox">
									    		<input type="checkbox"> No cerrar sesión
									    	</label>
									    </div>
								    </div>
								    <button type="submit" class="btn btn-success btn-large btn-block" id="Inicia" >Iniciar Sesión</button>
							    </form>
    						</div>
    					</div>
    					
    				</div>
    			</div>
    		</div>
    	</div>
	
</body>
</html>