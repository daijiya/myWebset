<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<base href="<?php echo site_url() ?>"
		<script src="js/jquery-1.12.2.js"></script>
		<title>用户登录</title>
		<script>
		
	</script>
		
	</head>
	<body>
		<form action="user/user_login" method="post">
			用户名：<input type="text" name="username"><br>
			密    码：<input type="password" name="password"><br>
			     <input type="submit" value="登录"/>
			     <a href="user/regist">注册</a>
		</form>
	</body>
	
</html>