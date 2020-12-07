<?php 
//递归返回值传递可使用&引用  外部定义global引用   static定义静态值 
// $i = 1;
// function recursion(){
// 	// $i = 1;
// 	global $i;
// 	echo $i;
// 	$i ++;
// 	if ($i < 10) {
// 		recursion($i);
// 	}
// }

// recursion();

require dirname(__FILE__)."./SingleCase.php";

//pid  父级id  result数据存储数组  spac子级前缀数量
function getlist($pid=0,&$result=array(),$spac=0)
{
	//调用数据库连接方法
	$db = SingleCase::getInstance();
	$spac += 2;
	$sql = "SELECT * FROM recursion WHERE Pid = $pid";
	$res = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	foreach ($res as $key => $value) {
		$value['catename'] = str_repeat('&nbsp;',$spac)."|--".$value['catename'];
		$result[] = $value;
		getlist($value['id'],$result,$spac);
	}
	return $result;
}

function displayCate($showid)
{
	$data = getlist();
	$str .= "<select name='cate'>";
	foreach ($data as $key => $value) {
		$selected = '';
		if ($value['id'] == $showid) {
			$selected = "selected";
		}
		$str .= "<option {$selected}>{$value['catename']}</option>";
	}
	return $str .= "</select>";
}

$showid = $_GET['pid'];
echo displayCate($showid);