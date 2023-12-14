<?php
	//Avoid users to access this file directly
	if (!defined('ABSPATH')) die();
	
	session_start();
	 
	//Verify debug mode
	if ( ! defined('DEBUG') || DEBUG === false ) {
	 
		// Esconde todos os erros
		error_reporting(0);
		ini_set("display_errors", 0); 
		
	} else {
	 
		// Mostra todos os erros
		error_reporting(E_ALL);
		ini_set("display_errors", 1); 
		
	}
	 
	//Global functions
	require_once ABSPATH . '/functions/global_functions.php';
	 
	//Load the aplication
	$router = new Router();

?>