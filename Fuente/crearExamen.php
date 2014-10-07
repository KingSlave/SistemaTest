<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Creacion de examen</title>
	  <link rel="icon" type="img/png" href="img/logo.png" />  
</head>
<body>
<?php
include("menu.php");
?>
<div class="row">
<div class="large-6 columns">
	<form>
		<label>Introduzca la clave del examen
			<input type="text" />		
			</label>
		<label>Introduzca el nombre del examen
			<input type="text" />		
			</label>
	</form>
</div>
</div>
<?php
include('tema.php');
?>
</body>
</html>