<div class="navbar navbar-inverse navbar-fixed-top">
			    <div class="navbar-inner">
				    <div class="container ">

					   <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					    <span class="icon-bar"> </span>
					    <span class="icon-bar"> </span>
					    <span class="icon-bar"> </span>
					    </a>

				     
				    <!-- Be sure to leave the brand out there if you want it shown -->
				    <a class="brand titulo" style="font-size:40px;" href="<?=base_url("welcome");?>">Dokdas</a>
				     
				    <!-- Everything you want hidden at 940px or less, place within here -->
				    <?if ($iniciada == TRUE) {?>
				    <nav class="nav-collapse collapse navbar-inverse-collapse">
				    	<ul class="nav pull-right">
			    			<li class="active"><a href="<?=base_url("welcome");?>"><i class="icon-home"></i> Inicio</a></li>
			    			<li class="dropdown">
							    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user icon-white"/></i> Perfil <b class="caret"></b></a>
							    <ul class="dropdown-menu">
							    	<li><a href="<?=base_url("perfil");?>">Ver Perfil</a></li>
							    	<li class="divider"> </li>
									<li class="nav-header">
										<a href="#">
											<i class="fa fa-cog"></i> Configuraci�n
										</a>
									</li>
									<li><a href="#"><i class="fa fa-shield"></i> Privacidad</a></li>
									<li class="divider"> </li>
									<li><a href="<?=base_url("welcome/logout");?>">Salir</a></li>
							    </ul>
							</li>
				    	</ul>
				    </nav>
				    <?}else{?>
					 <nav class="nav-collapse collapse navbar-inverse-collapse">
				    	<ul class="nav pull-right">
			    			<li class="dropdown">
							    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Iniciar Sesión <b class="caret"></b></a>
							    <ul class="dropdown-menu" style="padding:5px;">
									
									<form class="form-horizontal" action="http://www.dokdas.com/welcome/iniciar" method="post">

									<li>Correo Electronico</li>
									<li><input type="text" name="Usuarios" id="Usuarios" placeholder="Correo Electronico"></li>
									<li class="divider"> </li>

									<li>Password</li>

							    	<li><input type="password" name="Contra" id="Contra" placeholder="Password"></li>
									
									<li class="divider"> </li>

						    		<li><input type="checkbox"> No cerrar sesión</li>
									<li class="divider"> </li>
									<li><button type="submit" class="btn btn-success btn-large btn-block" id="Inicia">Iniciar Sesión</button></li>
								    </form>
									</li>
							    </ul>
							</li>
				    	</ul>
				    </nav>
				    <?}?>
				    </div>
			    </div>
    	</div>