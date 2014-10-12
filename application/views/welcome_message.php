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
		<?/*
			var Nombre,Apellido,Correo,Recorreo,password,Dia,Mes,Year,Genero,Usuario,Contra;
			setInterval(function(){
				Nombre = $("#Nombre").val();
				Apellido = $("#Apellido").val();
				Correo = $("#Correo").val();
				Recorreo = $("#Recorreo").val();
				password = $("#Password").val();
				Dia = $("#Dia").val();
				Mes = $("#Mes").val();
				Year = $("#Year").val();
				Genero = $("#Genero").val();
				if((Nombre.length!=0||Nombre!="")&&(Apellido.length!=0||Apellido!="")&&(Correo.length!=0||Correo!="")&&(Recorreo.length!=0||Recorreo!="")&&(password.length!=0||password!="")&&Dia!=0&&Mes!=0&&Year!=0&&Genero!=0){
					$("#registrarme").css("display","block");
				}else{
					$("#registrarme").css("display","none");
				}

				Usuario = $("#Usuarios").val();
				Contra = $("#Contra").val();
				if((Usuario.length!=0||Usuario!="")&&(Contra.length!=0||Contra!="")){
					$("#Inicia").css("display","block");
				}else{
					$("#Inicia").css("display","none");
				}
			},1000);*/?>
		});
<?/*		
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      //document.getElementById('status').innerHTML = 'Please log ' +'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '347972715354327',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.0
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };
function cerrarsession(response){
   FB.logout(function(response) {
    	statusChangeCallback(response);
    });
}

  // Load the SDK asynchronously

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_LA/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me',function(response) {
      console.log('Successful login for: ' + response.name);
      //document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.email +' '+response.last_name+' '+response.first_name+' '+response.name+' '+response.gender+' '+response.birthday+' !';
		if(response.gender=="male"){
			genero = 2;
		}else if(response.gender=="female"){
			genero = 1;
		}else{
			genero = 3;
		}
        $.ajax({
			type: "POST",
			url: "http://www.dokdas.com/api",
			data: { Nombre: response.first_name, Apellido: response.last_name, Correo: response.email, Pasword: response.id, Birthday : response.birthday, Genero:genero}
		}).done(function( msg ) {
			alert( msg );
			if(msg=="Listo"){
				window.location="http://www.dokdas.com";
			}
		});
    });
  }

*/?>
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

        <style>
        	body{
        		background-color:#FFFFFF;
        		background-image: url(http://dokdas.com/img/p3.jpg);
        	}
        	
        	#div{
			    background-image: url(http://dokdas.com/img/p23.jpg);
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

<div id="Iniciar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="myModalLabel">Inicio de Sesi&oacute;n</h3>
	</div>
	<div class="modal-body">
			<form class="form-horizontal" action="http://www.dokdas.com/welcome/iniciar" method="post">
			    <div class="control-group">
			    	<label class="control-label">Correo Electr&oacute;nico</label>
				    <div class="controls">
				    	<input type="email" name="Usuarios" id="Usuarios" placeholder="Correo Electr&oacute;nico">
				    </div>
			    </div>
			    <div class="control-group">
				    <label class="control-label">Contrase&ntilde;a</label>
				    <div class="controls">
				    	<input type="password" name="Contra" id="Contra" placeholder="Contrase&ntilde;a">
				    </div>
			    </div>
			    <div class="control-group">
				    <div class="controls">
				    	<label class="checkbox">
				    		<input type="checkbox"> No cerrar sesi&oacute;n
				    	</label>
				    </div>
			    </div>
			    <button type="submit" class="btn btn-success btn-large btn-block" id="Inicia">Iniciar Sesi&oacute;n</button>
		    </form>
	</div>
</div>
<div id="Registrarse" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="myModalLabel">Registrarse</h3>
	</div>
	<!--
	Registrate con Facebook<br/>
	<fb:login-button max_rows="1" size="large" show_faces="false" auto_logout_link="true" scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
	-->
	<div class="modal-body">
			<form class="form-horizontal" action="http://www.dokdas.com/welcome/registrarse" method="post">
			    <div class="control-group">
			    	<label class="control-label">Nombre</label>
				    <div class="controls">
				    	<input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
				    </div>
			    </div>
			    <div class="control-group">
			    	<label class="control-label">Apellido</label>
				    <div class="controls">
				    	<input type="text" name="Apellidos" id="Apellido" placeholder="Apellido">
				    </div>
			    </div>
			    <div class="control-group">
			    	<label class="control-label">Correo electr&oacute;nico</label>
				    <div class="controls">
				    	<input type="email" name="Correo" id="Correo" placeholder="Correo Electr&oacute;nico">
				    </div>
			    </div>
			    <div class="control-group">
			    	<label class="control-label">Repite el correo electronico</label>
				    <div class="controls">
				    	<input type="email" name="Recorreo" id="Recorreo" placeholder="Repite el correo electr&oacute;nico">
				    </div>
			    </div>
			    <div class="control-group">
				    <label class="control-label">Contrase&ntilde;a</label>
				    <div class="controls">
				    	<input type="password" name="Password" id="Password" placeholder="Contrase&ntilde;a">
				    </div>
			    </div>
			    <div class="control-group">
				    <label class="control-label">Fecha de Nacimiento</label>
				    <div class="controls">
				    	<div class="row-fluid">
				    		<div class="span4">
				    			<select name="Dia" id="Dia" required>
				    				<option value="0" selected="1">D&iacute;a</option>
						    		<option value="1">1</option>
						    		<option value="2">2</option>
						    		<option value="3">3</option>
						    		<option value="4">4</option>
						    		<option value="5">5</option>
						    		<option value="6">6</option>
						    		<option value="7">7</option>
						    		<option value="8">8</option>
						    		<option value="9">9</option>
						    		<option value="10">10</option>
						    		<option value="11">11</option>
						    		<option value="12">12</option>
						    		<option value="13">13</option>
						    		<option value="14">14</option>
						    		<option value="15">15</option>
						    		<option value="16">16</option>
						    		<option value="17">17</option>
						    		<option value="18">18</option>
						    		<option value="19">19</option>
						    		<option value="20">20</option>
						    		<option value="21">21</option>
						    		<option value="22">22</option>
						    		<option value="23">23</option>
						    		<option value="24">24</option>
						    		<option value="25">25</option>
						    		<option value="26">26</option>
						    		<option value="27">27</option>
						    		<option value="28">28</option>
						    		<option value="29">29</option>
						    		<option value="30">30</option>
						    		<option value="31">31</option>
						    	</select>
				    		</div>
				    		<div class="span4">
				    			<select name="Mes" id="Mes" required>
						    		<option value="0" selected="1">Mes</option>
						    		<option value="1">Ene</option>
						    		<option value="2">Feb</option>
						    		<option value="3">Mar</option>
						    		<option value="4">Abr</option>
						    		<option value="5">May</option>
						    		<option value="6">Jun</option>
						    		<option value="7">Jul</option>
						    		<option value="8">Ago</option>
						    		<option value="9">Sep</option>
						    		<option value="10">Oct</option>
						    		<option value="11">Nov</option>
						    		<option value="12">Dic</option>
						    	</select>
				    		</div>
				    		<div class="span4">
				    			<select name="Year" id="Year" required><option value="0" selected="1">A&ntilde;o</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>
				    		</div>
				    	</div>
				    </div>
			    </div>
			    <div class="control-group">
				    <label class="control-label">Genero</label>
				    <div class="controls">
				    	<select name="Genero" id="Genero" required>
				    		<option value="0">Elegir</option>
				    		<option value="1">Femenino</option>
				    		<option value="2">Masculino</option>
				    	</select>
				    </div>
			    </div>
				    	<button type="submit" class="btn btn-primary btn-large btn-block" id="registrarme">Registrarme</button>
		    </form>
	</div>
</div>

        <div class="container" style="min-height: 800px;">
        	<div class="row-fluid">
        		<div class="span12 visible-desktop" style="margin-top:30px;">
        			&nbsp;
        		</div>
        	</div>
    		<div class="row-fluid" >
			  <div class="span7 visible-desktop"  >
				<div id="myCarousel" class="carousel slide">
	                <ol class="carousel-indicators">
	                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	                  <li data-target="#myCarousel" data-slide-to="1"></li>
	                  <li data-target="#myCarousel" data-slide-to="2"></li>
	                  <li data-target="#myCarousel" data-slide-to="3"></li>
	                  <li data-target="#myCarousel" data-slide-to="4"></li>
	                </ol>
	                <div class="carousel-inner">
	                  	<div class="item active">        
	                    	<?=img('img/img1.png');/*echo img('img/fondo.jpg');*/?>
	                    	<div class="carousel-caption">
		                      <h4>First Thumbnail label</h4>
		                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    </div>
	                  	</div>
	                  	<div class="item">
	                  		<?=img('img/img2.png');/*echo img('img/fondo.jpg');*/?>
	                  		<div class="carousel-caption">
		                      <h4>First Thumbnail label</h4>
		                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    </div>
	                  	</div>
	                  	<div class="item">
	                  	 	<?=img('img/img3.png');/*echo img('img/fondo.jpg');*/?>
	                  	 	<div class="carousel-caption">
		                      <h4>First Thumbnail label</h4>
		                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    </div>
	                 	 </div>
	                  	<div class="item">
	                  	 	<?=img('img/img4.png');/*echo img('img/fondo.jpg');*/?>
	                  	 	<div class="carousel-caption">
		                      <h4>First Thumbnail label</h4>
		                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    </div>
					  	</div>
					  	<div class="item">
					  	 	<?=img('img/img5.png');/*echo img('img/fondo.jpg');*/?>
					  	 	<div class="carousel-caption">
		                      <h4>First Thumbnail label</h4>
		                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    </div>
					  	</div>
	                	</div>
					</div>
			  	</div>
			  	<div class="span5 well visible-desktop" >
			  		<h2>Quiero registrarme! <i class="fa fa-smile-o"></i> </h2>
			  		<!--
			  		Registrate con Facebook<br/>
					<fb:login-button max_rows="1" size="large" show_faces="false" auto_logout_link="true" scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
					-->
					<form class="form-horizontal" action="http://www.dokdas.com/welcome/registrarse" method="post">
					    <div class="control-group">
					    	<label class="control-label">Nombre</label>
						    <div class="controls">
						    	<input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
						    </div>
					    </div>
					    <div class="control-group">
					    	<label class="control-label">Apellido</label>
						    <div class="controls">
						    	<input type="text" name="Apellidos" id="Apellido" placeholder="Apellido">
						    </div>
					    </div>
					    <div class="control-group">
					    	<label class="control-label">Correo electr&oacute;nico</label>
						    <div class="controls">
						    	<input type="email" name="Correo" id="Correo" placeholder="Correo Electronico">
						    </div>
					    </div>
					    <div class="control-group">
					    	<label class="control-label">Repite el correo electr&oacute;nico</label>
						    <div class="controls">
						    	<input type="email" name="Recorreo" id="Recorreo" placeholder="Repite el correo electronico">
						    </div>
					    </div>
					    <div class="control-group">
						    <label class="control-label">Contrase&ntilde;a</label>
						    <div class="controls">
						    	<input type="password" name="Password" id="Password" placeholder="Contrase&ntilde;a">
						    </div>
					    </div>
					    <div class="control-group">
						    <label class="control-label">Fecha de Nacimiento</label>
						    <div class="controls">
						    	<div class="row-fluid">
						    		<div class="span4">
						    			<select name="Dia" id="Dia" required>
						    				<option value="0" selected="1">D&iacute;a</option>
								    		<option value="1">1</option>
								    		<option value="2">2</option>
								    		<option value="3">3</option>
								    		<option value="4">4</option>
								    		<option value="5">5</option>
								    		<option value="6">6</option>
								    		<option value="7">7</option>
								    		<option value="8">8</option>
								    		<option value="9">9</option>
								    		<option value="10">10</option>
								    		<option value="11">11</option>
								    		<option value="12">12</option>
								    		<option value="13">13</option>
								    		<option value="14">14</option>
								    		<option value="15">15</option>
								    		<option value="16">16</option>
								    		<option value="17">17</option>
								    		<option value="18">18</option>
								    		<option value="19">19</option>
								    		<option value="20">20</option>
								    		<option value="21">21</option>
								    		<option value="22">22</option>
								    		<option value="23">23</option>
								    		<option value="24">24</option>
								    		<option value="25">25</option>
								    		<option value="26">26</option>
								    		<option value="27">27</option>
								    		<option value="28">28</option>
								    		<option value="29">29</option>
								    		<option value="30">30</option>
								    		<option value="31">31</option>
								    	</select>
						    		</div>
						    		<div class="span4">
						    			<select name="Mes" id="Mes" required>
								    		<option value="0" selected="1">Mes</option>
								    		<option value="1">Ene</option>
								    		<option value="2">Feb</option>
								    		<option value="3">Mar</option>
								    		<option value="4">Abr</option>
								    		<option value="5">May</option>
								    		<option value="6">Jun</option>
								    		<option value="7">Jul</option>
								    		<option value="8">Ago</option>
								    		<option value="9">Sep</option>
								    		<option value="10">Oct</option>
								    		<option value="11">Nov</option>
								    		<option value="12">Dic</option>
								    	</select>
						    		</div>
						    		<div class="span4">
						    			<select name="Year" id="Year" required><option value="0" selected="1">A&ntilde;o</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>
						    		</div>
						    	</div>
						    </div>
					    </div>
					    <div class="control-group">
						    <label class="control-label">Genero</label>
						    <div class="controls">
						    	<select name="Genero" id="Genero" required>
						    		<option value="0">Elegir</option>
						    		<option value="1">Femenino</option>
						    		<option value="2">Masculino</option>
						    	</select>
						    </div>
					    </div>
						    	<button type="submit" class="btn btn-primary btn-large btn-block" id="registrarme">Registrarme</button>
				    </form>
			  	</div>
			  	<div class="span12 well hidden-desktop">
			  		<form class="form-horizontal" action="http://www.dokdas.com/welcome/registrarse" method="post">
					    <div class="control-group">
					    	<label class="control-label">Nombre</label>
						    <div class="controls">
						    	<input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
						    </div>
					    </div>
					    <div class="control-group">
					    	<label class="control-label">Apellido</label>
						    <div class="controls">
						    	<input type="text" name="Apellido" id="Apellido" placeholder="Apellido">
						    </div>
					    </div>
					    <div class="control-group">
					    	<label class="control-label">Correo electr&oacute;nico</label>
						    <div class="controls">
						    	<input type="email" name="Correo" id="Correo" placeholder="Correo Electr&oacute;nico">
						    </div>
					    </div>
					    <div class="control-group">
					    	<label class="control-label">Repite el correo electr&oacute;nico</label>
						    <div class="controls">
						    	<input type="email" name="Recorreo" id="Recorreo" placeholder="Repite el correo electr&oacute;nico">
						    </div>
					    </div>
					    <div class="control-group">
						    <label class="control-label">ContraseÒa</label>
						    <div class="controls">
						    	<input type="password" name="Password" id="Password" placeholder="ContraseÒa">
						    </div>
					    </div>
					    <div class="control-group">
						    <label class="control-label">Fecha de Nacimiento</label>
						    <div class="controls">
						    	<div class="row-fluid">
						    		<div class="span4">
						    			<select name="Dia" id="Dia" required>
						    				<option value="0" selected="1">D&iacute;a</option>
								    		<option value="1">1</option>
								    		<option value="2">2</option>
								    		<option value="3">3</option>
								    		<option value="4">4</option>
								    		<option value="5">5</option>
								    		<option value="6">6</option>
								    		<option value="7">7</option>
								    		<option value="8">8</option>
								    		<option value="9">9</option>
								    		<option value="10">10</option>
								    		<option value="11">11</option>
								    		<option value="12">12</option>
								    		<option value="13">13</option>
								    		<option value="14">14</option>
								    		<option value="15">15</option>
								    		<option value="16">16</option>
								    		<option value="17">17</option>
								    		<option value="18">18</option>
								    		<option value="19">19</option>
								    		<option value="20">20</option>
								    		<option value="21">21</option>
								    		<option value="22">22</option>
								    		<option value="23">23</option>
								    		<option value="24">24</option>
								    		<option value="25">25</option>
								    		<option value="26">26</option>
								    		<option value="27">27</option>
								    		<option value="28">28</option>
								    		<option value="29">29</option>
								    		<option value="30">30</option>
								    		<option value="31">31</option>
								    	</select>
						    		</div>
						    		<div class="span4">
						    			<select name="Mes" id="Mes" required>
								    		<option value="0" selected="1">Mes</option>
								    		<option value="1">Ene</option>
								    		<option value="2">Feb</option>
								    		<option value="3">Mar</option>
								    		<option value="4">Abr</option>
								    		<option value="5">May</option>
								    		<option value="6">Jun</option>
								    		<option value="7">Jul</option>
								    		<option value="8">Ago</option>
								    		<option value="9">Sep</option>
								    		<option value="10">Oct</option>
								    		<option value="11">Nov</option>
								    		<option value="12">Dic</option>
								    	</select>
						    		</div>
						    		<div class="span4">
						    			<select name="Year" id="Year" required><option value="0" selected="1">A&ntilde;o</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>
						    		</div>
						    	</div>
						    </div>
					    </div>
					    <div class="control-group">
						    <label class="control-label">Genero</label>
						    <div class="controls">
						    	<select name="Genero" id="Genero" required>
						    		<option value="0">Elegir</option>
						    		<option value="1">Femenino</option>
						    		<option value="2">Masculino</option>
						    	</select>
						    </div>
					    </div>
						    	<button type="submit" class="btn btn-primary btn-large btn-block" id="registrarme">Registrarme</button>
				    </form>
			  	</div>
			</div>        	
			<div class="row-fluid">
				<div class="span10 well offset1">
					<h2>Bienvenido a Dokdas!</h2>
					<div class="text-center">
						<p class="lead">
							<h3>
								<i class="fa fa-quote-left"></i>
								<i>Has de las fotos diarias algo extraorinario</i>
								<i class="fa fa-quote-right"></i>
							</h3>
						</p>
						<button class="btn btn-primary btn-large" href="#Registrarse" data-toggle="modal">Registrate</button><br/>
						√≥<br/>
						<button class="btn btn-success btn-large" href="#Iniciar" data-toggle="modal">Inicar Sesi√≥n</button><br/>

					</div>
				</div>
			</div>
			<!--
			<div class="row-fluid">
				<div class="span10 well offset1">
					<div class="row-fluid">
						<div class="span7">
							<h3>Titulo</h3>
							<p>
								Le ya dejara yo he esmero acogia. Por senoronas inspirado municipio vagamente consentir del. Le ma importuno exagerada maniobras. Legitimos encuentro levantaba la en homenajes discurrir su. Me fiar cama paro la no. La oh miserables testamento no lo chillerias. Esa los cerradura una contraria obsequios ocasiones los. Vulgar tiraba dar afines traido habian echaba ton soy que. 
							</p>
						</div>
						<div class="span5">
							<?=img('img/portada.jpeg');?>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span10 well offset1">
					<div class="row-fluid">
						<div class="span5">
							<?=img('img/portada2.jpeg');?>	
						</div>
						<div class="span7">
							<h3 class="text-right">Titulo</h3>
							<p class="text-right">
								Le ya dejara yo he esmero acogia. Por senoronas inspirado municipio vagamente consentir del. Le ma importuno exagerada maniobras. Legitimos encuentro levantaba la en homenajes discurrir su. Me fiar cama paro la no. La oh miserables testamento no lo chillerias. Esa los cerradura una contraria obsequios ocasiones los. Vulgar tiraba dar afines traido habian echaba ton soy que. 
							</p>
						</div>
						
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span10 well offset1">
					<div class="row-fluid">
						<div class="span7">
							<h3>Titulo</h3>
							<p>
								Le ya dejara yo he esmero acogia. Por senoronas inspirado municipio vagamente consentir del. Le ma importuno exagerada maniobras. Legitimos encuentro levantaba la en homenajes discurrir su. Me fiar cama paro la no. La oh miserables testamento no lo chillerias. Esa los cerradura una contraria obsequios ocasiones los. Vulgar tiraba dar afines traido habian echaba ton soy que. 
							</p>
						</div>
						<div class="span5">
							<?=img('img/portada3.jpeg');?>
						</div>
					</div>
				</div>
			</div>
		-->
			<div class="row-fluid">
				<div class="well span10 offset1">
					<h4>Proximamente disponible para:</h4>
					<i class="fa fa-android"></i> Android<br/>
					<i class="fa fa-apple"></i> Iphone<br/>
					<i class="fa fa-windows"></i> Windows Phone<br/>
				</div>	
			</div>
          
        </div>
        <footer class="navbar navbar-inverse navbar-static-top">
			    <div class="navbar-inner">
				    <div class="container ">
				    	 <ul class="nav">
			    	 		<li class="active"><a href="https://www.facebook.com/pprefanc">Creador  Pedro Peraf√°n</a></li>
			    			<li><a href="#">Desarrolladores</a></li>
			    			<li><a href="#">Contacto</a></li>
			    			<li><a href="#">Politicas de Privacidad</a></li>
				    	</ul>
				    </div>
		   		</div>
        	
        </footer>

    </body>
</html>
