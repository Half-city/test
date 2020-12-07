<?php 

include "./Factory.php";
// spl_autoload_register(function ($className)
// {
// 	$file =  "./".$className.".php";
// 	// echo $file;exit;
// 	require $file;
// });

echo Factory::createDatabase();
// new Factory();