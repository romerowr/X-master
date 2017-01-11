<?php
	// developer mode: aquestes comandes s'utilitzen per tal de comprobar els errors que tenim
	error_reporting(E_ALL);
	ini_set('display_errors',1);

	//config file: per millorar els accessos
	require_once 'x.inc.php';
	//els usos son al mateix que els require, pero apodando
	use \X\Sys\Autoload;
	use \X\Sys\Core;
	use \X\Sys\Registry;

	$loader=new Autoload(); //creem una instancia autoload  
	$loader->register();//es registra
	//i es creen els namespaces per poder localitzar amb més facilitat les clases
	$loader->addNamespace('X\Sys','sys');
	$loader->addNamespace('X\App','app');
	$loader->addNamespace('X\App\Controllers','app/controllers');
	$loader->addNamespace('X\App\Models','app/models');
	$loader->addNamespace('X\App\Views','app/views');	
	//crear registry
	//$config=new Registry(); este no comprueba 
	//el siguiente acceso SINGLETON al Registry
	//$config=Registry::getInstance();

	Core::init();//se inicia el CAP del framework