<?php 
//diename(__FILE__)   //获取当前文件的文件夹名称

require dirname(__FILE__)."./SingleCase.php";

$db = SingleCase::getInstance();

$sql = "select * from status";

$data = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);


 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>点击事件</title>
 </head>
 <body>
 	<table border="1">
 		<tr>
 			<td>姓名</td>
 			<td>语文</td>
 			<td>数学</td>
 			<td>英语</td>
 			<td>状态</td>
 		</tr>
 		<?php foreach ($data as $key => $value) { ?>
 		<tr>
 			<td><?php echo $value['name'] ?></td>
 			<td><?php echo $value['yuwen'] ?></td>
 			<td><?php echo $value['shuxue'] ?></td>
 			<td><?php echo $value['yingyu'] ?></td>
 			<td><button class='spot' name="<?php echo $value['id'] ?>" status="<?php echo $value['status'] ?>"><?php if ($value['status'] == 1) {
 				echo '√';
 			}else{
 				echo '×';
 			} ?></button></td>
 		</tr>
 	<?php } ?>
 	</table>
 </body>
 </html>

<script src="./jquery-3.5.1.js"></script>
<script>
	$('.spot').click(function() {
		var id = $(this).attr('name');
		var status = $(this).attr('status');
		$.ajax({
			url:"updateStatus.php",
			data:{'id':id,'status':status},
			success:function(data) {
				if (data = 1) {
					alert('修改成功');
				}else{
					alert('修改失败');
				}
			}
		});
	})
</script>