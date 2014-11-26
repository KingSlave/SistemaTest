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
<div class="large-6 large-centered columns">
<h3>Creacion de nuevo examen</h3>
<div class="panel">
	<form method="post" action="procesar/insertar.php">
	<input type="hidden" name="tabla" value="examenes">
	<label>Numero de examen: 1</label>
		<label>Numero de unidad:			
			<input type="number" name="Unidad" value="" placeholder="">						
			</label>
		<label>Estado actual del examen: 		    		
		      <select id="estado" name="Estado">
		      	<option value="Abierto">Abierto</option>
		      	<option value="Cerrado">Cerrado</option>}		      	
		      </select>		      
			</label>
			<label>
				Fecha de inicio:
			<input type="date" name="fInicio" value="" placeholder="">
			</label>
			<label>
				Fecha de cierre:
			<input type="date" name="fCierre" value="" placeholder="">
			</label>	
		<input type="submit" class="button round" value="Guardar">
	</form>
	<?php
    if(isset($_GET['res'])){
	$resultado = $_GET['res'];	
	if($resultado==1){
	?>
	<div data-alert class="alert-box success round">
  	 El examen se ha creado correctamente
	</div>
<?php 
}
else{
?>
	<div data-alert class="alert-box alert round">
  	 No se ha podido crear el examen 
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