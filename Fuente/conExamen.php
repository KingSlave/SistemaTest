<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta de usuario</title>
	<link rel="icon" type="img/png" href="img/logo.png" />
</head>
<body>
<?php
include('menu.php');
?>	

<div class="row">
<div class="large-6 large-centered columns">
<h3>Consulta de examenes</h3>
</div>
</div>
<div class="row">
<div class="large-6 large-centered columns">
<table>
<thead>
	<tr>
		<th>Numero</th>
		<th>Unidad</th>
		<th>Estado</th>		
		<th>Fecha de inicio</th>
		<th>Fecha de cierre</th>
		<th>Operaciones</th>

	</tr>
</thead>
<tbody>
	<tr>
		<td>1</td>
		<td>2</td>
		<td>Abierto</td>
		<td>10/10/2014</td>
		<td>11/10/2014</td>		
		<td>		
		<i class="fi-x tamIcono tonoNaranja"></i>
		<i class="fi-page-edit tamIcono tonoNaranja"></i>		
		<i class="fi-target tamIcono tonoMorado"></i>		
		</td>	
	</tr>
	<tr>
		<td>5</td>
		<td>3</td>
		<td>Abierto</td>
		<td>05/11/2014</td>
		<td>24/12/2014</td>		
		<td>
		<i class="fi-x tamIcono tonoNaranja"></i>
		<i class="fi-page-edit tamIcono tonoNaranja"></i>		
		<i class="fi-target tamIcono tonoMorado"></i>			
		</td>	
	</tr>
</tbody>
</table>

</div>	
</div>
<?php
include('tema.php');
?>
</body>
</html>