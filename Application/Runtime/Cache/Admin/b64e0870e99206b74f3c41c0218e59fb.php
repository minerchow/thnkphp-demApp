<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div>
		<input type"hidden"  id="idText" value="<?php echo ($userData["id"]); ?>"/>
		姓名<input type="text" id="name" value="<?php echo ($userData["username"]); ?>"/>
		年龄<input type="text" id="age" value="<?php echo ($userData["age"]); ?>"/>
		<button>提交</button>
	</div>
	<script src="http://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('button').on("click",function(){
			$.ajax({
			  method: "POST",
			  url: "/thinkphp-demo/index.php/Admin/Admin/postEdit",
			  data: { name: $('#name').val(), age: $('#age').val(),id:$('#idText').val()},
			  dataType: "json"
			}).done(function( msg ) {
			  	window.location.href="/thinkphp-demo/index.php/Admin/Admin/show"
			});	
		})
	</script>
</body>
</html>