<?php 
namespace Pattern\Database;
/**
 * 
 */
class SingleCase
{
	
	static private $instance;
	private $host = "127.0.0.1";
	private $user = "root";
	private $pwd = "root";
	private $dbname = "test";

	private function __construct()
	{
		# code...
	}

	private function __clone()
	{
		# code...
	}

	static public function getInstance()
	{
		if (!self::$instance) {
			self::$instance = new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd) or die("数据库连接失败");
		}
		return self::$instance;
	}
}