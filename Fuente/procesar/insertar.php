<?php 

$sql = 'insert into ';
$paginaRetorno = '';
$resultadoRetorno = 0;

if(isset($_POST['tabla'])){

	$tabla = $_POST['tabla'];

	$sql = $sql.$tabla.' values(';

	if($tabla == 'usuarios'){
		if(isset($_POST['nick']) && isset($_POST['pass'])){
			$nick = $_POST['nick'];
			$pass = $_POST['pass'];

			$sql = $sql."'$nick',password('$pass'))";
		$paginaRetorno = 'regUsuario.php';
		}else{
			die('Error en datos: ERROR 0xU');	
		}

	}else
	if($tabla == 'examenes'){


	}

}else{
//ERROR POR NO ESPECIFICAR LA TABLA
die('La operacion no puede ser realizada: ERROR 0xT');	
}

require_once 'config.php';

$conexion = mysqli_connect($servidor, $usuario, $password, $baseDeDatos );
$resultadoRetorno = 1;
$res  = mysqli_query($conexion, $sql) or $resultadoRetorno=0;

header('Location: ../'.$paginaRetorno.'?res='.$resultadoRetorno);

?>