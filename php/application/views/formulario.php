<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>formulario</title>
	  <meta charset="UTF-8"/>
	</head>
	<body id="formulario" onload="">
	   <?= form_open('/registrarse/registrarUsuario')?>
	   <?
	   $nombre = array(
	   		'name' => 'nombre',
	   		'placeholder' => 'Escribe tu nombre'
	   );
	   $apellido = array(
	   		'name' => 'apellido',
	   		'placeholder' => 'Escribe tu apellido'
	   );
	   $correo = array(
	   		'name' => 'correo',
	   		'placeholder' => 'Escribe tu correo electronico'
	   );
	   $recorreo = array(
	   		'name' => 're-correo',
	   		'placeholder' => 'Escribe de nuevo tu correo electronico'
	   );
	   $pass = array(
	   		'name' => 'password',
	   		'placeholder' => 'Escribe tu contraseña'
	   );
	   
	   ?>
	   <?= form_label('Nombre:','nombre');?>
	   <?= form_input($nombre)?> <br/>
	   <?= form_label('Apellido:','apellido');?>
	   <?= form_input($apellido)?><br/>
	   <?= form_label('Correo:','correo');?>
	   <?= form_input($correo)?><br/>
	   <?= form_label('Correo (Otra vez):','re-correo');?>
	   <?= form_input($recorreo)?><br/>
	   <?= form_label('Contraseña:','password');?>
	   <?= form_password($pass)?><br/>
	   <?= form_submit('','Registrarse')?>
	   <?= form_close()?>
	</body>
</html>