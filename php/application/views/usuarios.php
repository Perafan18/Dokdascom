<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>usuarios</title>
	  
	</head>
	<body id="" onload="">
	  <?
	  if($usuarios){
	  foreach ($usuarios->result() as $usuario ) {?>
		  <ul>
		  		<li><a href="verusuarios/<?= $usuario->ID ?>"><?= $usuario->Nombre ?></a></li>
		  </ul>
	  <?
		}
	  }else{
	  	echo "OMAIGA! no existe este elemento";
	  }
	  
	  ?>
	</body>
</html>