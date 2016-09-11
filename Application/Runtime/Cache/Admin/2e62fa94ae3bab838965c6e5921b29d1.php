<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>后台用户列表展示</h1>

	<table>
		<th>
			<tr>
				<td>id</td>
				<td>用户名</td>
				<td>年龄</td>
			</tr>
		</th>
		<tbody>
			<?php if(is_array($userData)): $i = 0; $__LIST__ = $userData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["username"]); ?></td>
					<td><?php echo ($vo["age"]); ?></td>
					<td><a href="javascript:void(0)" class="js_del" data-id="<?php echo ($vo["id"]); ?>">删除</a></td>
					<td><a href="/thinkphp-demo/index.php/Admin/Admin/edit/?id=<?php echo ($vo["id"]); ?>" class="js_edit" data-id="<?php echo ($vo["id"]); ?>">编辑</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<script src="http://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('.js_del').on("click",function(){
			var that = $(this);
			var id = that.attr("data-id");
			$.ajax({
			  method: "POST",
			  url: "/thinkphp-demo/index.php/Admin/Admin/del",
			  data: { id:id},
			  dataType: "json"
			}).done(function( msg ) {
			  	location = location;
			});
		})
	</script>
</body>
</html>