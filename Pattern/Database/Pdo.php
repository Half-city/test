<?php 
namespace Pattern\Database;

use Pattern\Database\Adapter;

/**
 * PDO通过适配器链接数据库
 */
class Pdo extends Adapter
{
	private $conn;

	function connect($host,$user,$password,$dbname)
	{
		$this->conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
	}

	function query($sql)
	{
		$this->conn->query($sql);
	}
	
	function close()
	{
		unset($this->conn);
	}
}