<?php 


	require_once("lib/nusoap.php");

	include("Funciones.php");

	$server = new soap_server();

	$ns = "http://localhost/SISTRASOAP/Server.php";

	$server->configureWSDL("sistraServicio",$ns);

	$server->wsdl->schematargetnamespace = $ns;

	$server->register
		("calculadora",
			array
			(
				'num1' => 'xsd:int',
				'num2' => 'xsd:int',
				'op' => 'xsd:String',
			),
			array
			(
				'return' => 'xsd:int',
			),
			$ns
		);

	$postdate = file_get_contents("php://input");

	$server->service($postdate);
 ?>