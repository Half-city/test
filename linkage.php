<?php 

$pid = $_GET['pid'];

require dirname(__FILE__)."./SingleCase.php";

$db = SingleCase::getInstance();
if ($pid) {
	$data = $db->query('SELECT * from districts where pid = 0')->fetchAll(PDO::FETCH_ASSOC);
}else{
	$data['error'] = "未获取有效pid";
}


echo json_encode($data);