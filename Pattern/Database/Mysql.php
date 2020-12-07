<?php 
namespace Pattern\Database;

use Pattern\Database\Adapter;
/**
 * mysql通过适配器链接数据库
 */
class Mysql extends Adapter
{
	private $conn;
	public function connect($host,$user,$password,$dbname)
	{
		$conn = mysql_connect($host,$user,$password);
		mysql_select_db($dbname,$conn);
		$this->conn = $conn;
	}

	public function query($sql)
	{
		$res = mysql_query($sql,$this->conn);
		return $res;
	}

	public function close()
	{
		mysql_close($this->conn);
	}
}