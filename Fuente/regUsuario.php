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
	<form method="post" enctype="multipart/form-data" action="procesar/insertar.php">
	<input type="hidden" name="tabla" value="usuarios">
		<label>
			Nick del usuario:
			<input type="text" id="nick" name="nick">			
		</label>
		<label>
			Password:
			<input type="password" id="nick" name="pass">
		</label>
		<label>
			Foto: 
			<input type="file" name="foto">
		</label>		
		<button class="small round button">Guardar</button>		
		<a href="index.php" class="small round button secondary"> Cancelar</a>			
	</form>
	<?php
    if(isset($_GET['res'])){
	$resultado = $_GET['res'];	
	if($resultado==1){
	?>
	<div data-alert class="alert-box success round">
  	 El usuario se ha registrado correctamente  
	</div>
<?php 
}
else{
?>
	<div data-alert class="alert-box alert round">
  	 No se ha podido registrar el usuario  
	</div>
<?php
}
	}
 ?>
	</div>
</div>	
</div>


<?php
include('tema.php');
?>
</body>
</html>