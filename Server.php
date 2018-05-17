<?php 


	require_once("lib/nusoap.php");

	
	require 'Funciones.php';

	$server = new soap_server();

	$server->configureWSDL("sistraServicio",'urn:sistraServicioWdsl');

	$server->soap_defencoding = 'UTF-8';

	$server->register("calculadora",array('num1' => 'xsd:int','num2' => 'xsd:int','op' => 'xsd:String',),array('return' => 'xsd:int',),'urn:sistraServicioWdsl');

	$postdate = file_get_contents("php://input");

	$server->service($postdate);
	
	
 ?>