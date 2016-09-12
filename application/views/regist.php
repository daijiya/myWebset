<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<base href="<?php echo site_url() ?>"
		<script src="js/jquery-1.12.2.js"></script>
		<?php echo site_url() ?>
		<title>用户注册</title>
		<script>
		$(function(){
			alert('houhou');
		});
		
	</script>
		
	</head>
	<body>
		<!-- action如果不设定固定路径，则为相对路径 -->
		<form action="user/save_user" method="post">
			用户名：<input type="text" name="username"><br>
			密码    ：<input type="password" name="password"><br>
			性别    ：<input type="radio" name = "sex" value="男"/>男&nbsp;&nbsp;
			     <input type="radio" name = "sex" value="女"/>女<br>
			     <input type="submit" value="注册"/>&nbsp;&nbsp;
			     <input type="reset" value="重置"/>
		</form>
	</body>
	
</html>