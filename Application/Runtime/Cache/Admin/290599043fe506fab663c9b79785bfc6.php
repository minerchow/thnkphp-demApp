<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	后台首页 登陆用户：<?php echo ($name); ?>
	<div>退出: <a href="javascript:void(0)" id="logout">退出</a></div>
	<script src="http://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('#logout').on("click",function(){
			 $.ajax({
              method: "POST",
              url: "/thinkphp-demo/index.php/Admin/Login/logout",
              data: {},
              dataType: "json"
            }).done(function( msg ) {
               if(msg.status == 1){
               		location = location;
               }
            });
		})
	</script>
</body>
</html>