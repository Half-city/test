<?php
ini_set("display_errors", "On"); 
error_reporting(E_ALL | E_STRICT);
$arr = [
	[
		'a' => 'aaa',
		'b' => 'abbb'
	]
	
];


foreach ($arr as ['a' => $aa]) {
	print_r($aa);
}




// ini_set("display_errors", "On"); 
// error_reporting(E_ALL | E_STRICT);
/**
 * 
 */
// class A 
// {
// 	function test(){
// 		echo '123';
// 		$this->dome();
// 	}

// 	static function dome()
// 	{
// 		echo 123456;
// 	}
// }

// A::test();

// function sum($carry, $item)
// {
//     $carry += $item;
//     return $carry;
// }

// function product($carry, $item)
// {
//     $carry *= $item;
//     return $carry;
// }

// $a = array(1, 2, 3, 4, 5);
// $x = array();

// var_dump(array_reduce($a, "sum")); // int(15)
// var_dump(array_reduce($a, "product", 10)); // int(1200), because: 10*1*2*3*4*5
// var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"	
// 

// function myfunction($v1,$v2)
// {
// return $v1 . "-" . $v2;
// }
// $a=array("Dog","Cat","Horse");

// print_r(array_reduce($a,"myfunction",5));

/**
 * 
 */
// class Test 
// {
// 	static function index(Closure $nxet)
// 	{
// 		echo '这是index方法';
// 		$nxet;
// 	}

// 	static function dome(Closure $nxet)
// 	{
// 		$nxet;
// 		echo '这是dome方法';
// 	}
// }

// $arr = array['Test::dome','Test::index'];

// call_user_func($arr);