<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de usuario</title>
	<link rel="icon" type="img/png" href="img/logo.png" />
</head>
<body>
<?php
include('menuLogin.php');
if(isset($_GET['res']) && $_GET['res']==2){
	session_destroy();
}

if(isset($_SESSION['admitido']) && $_SESSION['admitido']=='si')
header("Location: index.php");
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
			<input type="text" id="nick" name="nick">			
		</label>
		<label>
			Password:
			<input type="password" id="password" name="password">
		</label>	
		<div  class="row">		
		<div class="large-8 large-centered columns"> 		
		<button class="small round button expand">Entrar</button>					
		</div>
		</div>	
	</form>
<?php 
if(isset($_POST['nick']) && isset($_POST['password'])){
require_once 'procesar/consultar.php';
$c =  new consultar();

$resultado = $c->consultarLogin($_POST['nick'],$_POST['password']);

if($resultado){
$_SESSION['admitido']='si';
$_SESSION['nick'] = $_POST['nick'];
header("Location: index.php");
}else{
$_SESSION['admitido']='no';
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