<?php 

require "./SingleCase.php";

//cid 上一级主id     result返回数据的数组
function getCateLink($cid,&$result=array())
{
	$db = SingleCase::getInstance();
	$sql = "SELECT * FROM recursion WHERE id = $cid";
	$data = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	foreach ($data as $key => $value) {
		$result[] = $value;
		getCateLink($value['pid'],$result);
	}
	krsort($result);
	return $result;
}

function displayLink($cid)
{
	$data = getCateLink($cid);
	foreach ($data as $key => $value) {
		echo "<a href='recursion.php?pid={$value['id']}'>{$value['catename']}</a> >";
	}
}

displayLink(10);