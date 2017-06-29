<?php

error_reporting(E_ALL); 
ini_set("display_errors", 1); 


spl_autoload_register(function ($class_name) {

	$path = __DIR__ . '/' ;
	$class_name = str_replace('\\', '/', $class_name);
	$class_name = explode('/', $class_name);
	array_shift($class_name);
	$class_name = implode('/', $class_name);

    include $path . $class_name . '.php';

});

//router
if (isset($_GET['r'])) {

	$class_name = $_GET['r'];

} else {

	$class_name = 'Index/index';

}

$tmp = explode('/', $class_name);
$controller = 'app\\controllers\\' . $tmp[0] . 'Controller';
$action = $tmp[1] . 'Action';

$co = new $controller;
echo $co->$action();