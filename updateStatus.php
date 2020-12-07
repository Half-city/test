<?php 

$data = $_GET;
require dirname(__FILE__)."./SingleCase.php";

$db = SingleCase::getInstance();


if ($data['status'] == 1) {
	// echo '这里修改状态为0';
	$sql = "update status set status = 0 where id = ".$data['id'];
}else{
	// echo "这里修改状态为1";
	$sql = "update status set status = 1 where id = ".$data['id'];
}

$res = $db->exec($sql);

echo $res;
