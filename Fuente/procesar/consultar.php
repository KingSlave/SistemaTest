<?php 

class consultar{

public function consultarUsuarios(){
$conexion =  mysqli_connect("localhost", "root", "binario", "examenes");
$consulta = mysqli_query($conexion, "select * from usuarios");

while($fila = mysqli_fetch_array($consulta)){
echo "<tr>
		<td>$fila[0]</td>
		<td>
		<img class='imagen' src='img/usuario_Borrar.png'>
		<img class='imagen' src='img/usuario_editar.png'>
		</td>	
	</tr>";

}

mysqli_close($conexion);
mysqli_free_result($consulta);
}

}



?>