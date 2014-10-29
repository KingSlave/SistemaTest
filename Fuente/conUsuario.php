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
<h3>Consulta de usuario</h3>
</div>
</div>
<div class="row">
<div class="large-6 large-centered columns">
<table>
<thead>
	<tr>
		<th>Nick</th>
		<th>Operaciones</th>
	</tr>
</thead>
<tbody>
<?php 

require_once 'procesar/consultar.php';
$con = new consultar();
$con->consultarUsuarios();
 ?>

<!--		<tr>
			<td>Pepe</td>
			<td>
			<img class="imagen" src="img/usuario_Borrar.png">
			<img class="imagen" src="img/usuario_editar.png">
			</td>	
		</tr>
		<tr>
			<td>Maria</td>
			<td>
			<img class="imagen" src="img/usuario_Borrar.png">
			<img class="imagen" src="img/usuario_editar.png">
			</td>	
		</tr>
		-->
</tbody>
</table>

</div>	
</div>
<?php
include('tema.php');
?>
</body>
</html>