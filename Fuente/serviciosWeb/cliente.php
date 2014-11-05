<?php
    require_once "../lib/nusoap.php";
    
    //$cliente = new nusoap_client("http://localhost:8080/localtest/serviciosWeb/servicio.php");
    
    $cliente = new nusoap_client("servicio.wsdl",true);
    
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Error:</h2>" . $error;
    }
      
    $result = $cliente->call("getDatos", array("parametro1" => "abc"));
      
if($result == null)
   echo "Datos nulos!";
else{
    if ($cliente->fault) {
        echo "<h2>Fault: Error en el servicio</h2>";
        print_r($result);        
    }
    else {
        $error = $cliente->getError();
        if ($error) {
            echo "<h2>Error:</h2>" . $error;
        }
        else {
            echo "<h2>Datos</h2>";
            for ($i=0; $i < count($result); $i++) { 
            echo $result[$i].'<br>';
            }                        
        }
    }
  }
?>