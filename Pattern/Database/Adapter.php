<?php 

namespace PatterDatabase;

/**
 * 适配器   用接口类约定几个必须实现的方法，然后需要适配的类都继承这个接口
 */
interface Adapter
{
	function connect($host,$user,$password,$dbname);
	function query($sql);
	function close();
}