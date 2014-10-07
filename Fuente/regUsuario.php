<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de usuario</title>
	<link rel="icon" type="img/png" href="img/logo.png" />
</head>
<body>
<?php
include('menu.php');
?>	

<div class="row">
<div class="large-6 large-centered columns">
<h3>Registro de nuevo usuario</h3>
</div>
</div>
<div class="row">
<div class="large-6 large-centered columns">
	<div class="panel radius">
	<form>
		<label>
			Nick del usuario:
			<input type="text" id="nick">			
		</label>
		<label>
			Password:
			<input type="password" id="nick">
		</label>		
		<button class="small round button">Guardar</button>		
		<a href="index.php" class="small round button secondary"> Cancelar</a>			
	</form>
	</div>
</div>	
</div>
<?php
include('tema.php');
?>
</body>
</html>