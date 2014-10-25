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
<h3>Inicio de sesion</h3>
</div>
</div>
<div class="row">
<div class="large-6 large-centered columns">
	<div class="panel radius">
	<form method="post">
		<label>
			Usuario:
			<input type="text" id="nick">			
		</label>
		<label>
			Password:
			<input type="password" id="nick">
		</label>	
		<div  class="row">		
		<div class="large-8 large-centered columns"> 		
		<button class="small round button expand">Entrar</button>					
		</div>
		</div>	
	</form>
	</div>
</div>	
</div>
<?php
include('tema.php');
?>
</body>
</html>