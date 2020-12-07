<?php 

//php 5.4之后的自动加载函数
// spl_autoload_register(function ($ClassName)
// {
// 	$filename = strtolower($ClassName);
// 	$path = "./".$filename.".php";
// 	if (file_exists($path)) {
// 		require $path;
// 	}else{
// 		echo $ClassName.".php 文件不存在";
// 	}	
// });

//加载类方法
function myautoload($ClassName)
{
	$filename = strtolower($ClassName);
	$path = "./".$filename.".php";
	if (file_exists($path)) {
		require $path;
	}else{
		echo $ClassName.".php 文件不存在";
	}
}

//还可以使用一个方法来完成
spl_autoload_register('myautoload');

//php 5.4之前的自动加载函数
// function __autoload($ClassName)
// {
// 	$filename = strtolower($ClassName);
// 	$path = "./$filename.php";
// 	if (file_exists($path)) {
// 		echo 1;
// 	}else{
// 		echo $ClassName.".php 文件不存在";
// 	}
// }

//不管是new对象的形式还是静态调用的方式都可以
$db = SingleCase::getInstance();
var_dump($db);
// try {
// 	$db->beginTransaction();	//开启事务
// 	$sql = "update acid set money = money+500 where id = 1";
// 	$res = $db->exec($sql);
// 	if (!$res) {
// 		throw new PDOException('老王装出失败');
// 	}
// 	$sql1 = "update acid set money = money-500 where id = 2";
// 	$ress = $db->exec($sql1);
// 	if (!$ress) {
// 		throw new PDOException('老刘转入失败');
// 	}
// 	echo "交易成功";
// 	$db->commit(); //交易成功，事务提交
// } catch (PDOException $e) {
// 	echo $e->getMessage();
// 	$db->rollback(); //交易失败，事务回滚
// }

// $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);//这个是通过设置属性方法进行关闭自动提交
// $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);//开启异常处理
//$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 1);//自动提交