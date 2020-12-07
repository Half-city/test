<?php 
namespace Pattern;
/**
 * 自动加载类
 */
class Loader
{
	static public function autoload($className)
	{
		var_dump($className);exit;
		// $file = BASDIR."\\".$className.".php";
		// require $file;
	}
}