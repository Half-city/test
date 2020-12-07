<?php  
require dirname(__FILE__)."./SingleCase.php";

$db = SingleCase::getInstance();

$data = $db->query('SELECT * from districts where pid = 0')->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>三级联动</title>
	<select class="dot">
		<option value="0">--请选择--</option>
		<?php foreach ($data as $key => $value) { ?>
			<option value="<?php echo $value['id'] ?>">
				<?php if (!empty($value['name'])) {
					echo $value['name'];
				} ?>
			</option>
		<?php } ?>
	</select>
</head>
<body>
	
</body>
</html>
<script src="./jquery-3.5.1.js"></script>
<script>
//改变事件
$('.dot').change(function(){
	//获取select标签下的option标签属性
	var options = $(".dot option:selected");
    var pid = options.val();
    var data = ajaxFun(pid);
    // alert(data);
});

function ajaxFun(pid) {
	$.ajax({
		url:"linkage.php",
		data:{'pid':pid},
		success:function(data) {
			alert(data);
			// return data;
		}
	})
}
</script>
