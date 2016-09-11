<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div>
		姓名<input type="text" id="name"/>
		年龄<input type="text" id="age"/>
		<button>提交</button>
	</div>
	<script src="http://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('button').on("click",function(){
			$.ajax({
			  method: "POST",
			  url: "/thinkphp-demo/index.php/Admin/Admin/postAdd",
			  data: { name: $('#name').val(), age: $('#age').val() },
			  dataType: "json"
			}).done(function( msg ) {
			  	window.location.href="/thinkphp-demo/index.php/Admin/Admin/postAdd"
			});	
		})
	</script>
</body>
</html>