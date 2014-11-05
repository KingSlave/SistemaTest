<?php
    require_once "../lib/nusoap.php";
      
        function getDatos($parametro1) {
          $datos =  array();
        if ($parametro1 == "abc") {
$datos[] = "Dato 1";
$datos[] = "Dato 2";
$datos[] = "Dato 3";
$datos[] = "Dato 4";
            //return join(",", $datos);
return $datos;
        }
        else {
                return null;
        }
    }
      
    $server = new soap_server();
    //$server->register("getDatos");

    $server->configureWSDL("Servicio web de x datos!", "urn:datos");
      
    $server->register("getDatos",
        array("parametro1" => "xsd:string"),
        array("return" => "xsd:Array"),
        "urn:datos",
        "urn:datos#getDatos",
        "rpc",
        "encoded",
        "Servicio web de x datos!");


if (isset($HTTP_RAW_POST_DATA)) { 
  $input = $HTTP_RAW_POST_DATA; 
}else{ 
  $input = implode("\r\n", file('php://input')); 
}
 
$server->service($input);
?>