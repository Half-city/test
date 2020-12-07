<?php 

/**
 *单例模式
 *链接数据库 
 */
class SingleCase 
{
	
	static private $instance;
	//数据库配置
	// static private $connect = 'localhost';
	// static private $database = 'test';
	// static private $username = 'root';
	// static private $password = 'root';

	private function __construct()
	{
		# code...
	}

	private function __clone()
	{
		# code...
	}

	public static function getInstance()
	{
		if (!self::$instance) {
			self::$instance = new PDO('mysql:host=localhost;dbname=test', 'root', 'root') or die('连接数据库失败');
			// new PDO('mysql:host='.self::$connect.';dbname='.self::$database.','.self::$username.','.self::$password) or die('连接数据库失败');
		}
		return self::$instance;
	}
}