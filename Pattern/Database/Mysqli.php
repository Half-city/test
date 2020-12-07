<?php 
namespace Pattern\Database;

use Pattern\Database\Adapter;

/**
 * mysqli通过适配器链接数据库 
 */
class Mysqli extends Adapter
{
	private $conn;

	function connect($host,$user,$password,$dbname)
	{
		$this->conn = mysqli_connect($host,$user,$password,$dbname);
	}

	function query($sql)
	{
		mysqli_query($this->conn,$sql);
	}

	function close(){
		mysqli_close($this->conn);
	}
}