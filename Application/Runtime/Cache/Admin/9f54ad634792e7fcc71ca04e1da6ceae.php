<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <input type="text" id="username"/>
    <input type="password" id="password"/>
    <input type="submit" id="btn"/>
    <script src="http://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $('#btn').on("click",function(){
            $.ajax({
              method: "POST",
              url: "/thinkphp-demo/index.php/Admin/Login/check",
              data: { username:$('#username').val(),password:$('#password').val()},
              dataType: "json"
            }).done(function( msg ) {
               if(msg.status == 1){
                window.location.href="/thinkphp-demo/index.php/Admin/Admin/Index";
               }
               else{
                window.location.href="/thinkphp-demo/index.php/Admin/Login/Index";
               }
            });
        })
    </script>
</body>
</html>