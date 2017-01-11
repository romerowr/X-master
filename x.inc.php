<?php

	namespace X; //inici del espai de nom

	require_once __DIR__.'/sys/autoload.php'; //inici

	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(__DIR__).DS);
	// to acces to filesystem
	define('APP',ROOT.'app'.DS);
	//to acces DocumentRoot
	define('APP_W', dirname($_SERVER['PHP_SELF']));
	