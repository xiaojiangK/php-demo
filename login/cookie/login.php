<?php 
header('Content-type:text/html;charset=utf-8');
if (isset($_COOKIE['username']) && $_COOKIE['username']==='admin') {
	exit('您已经登录请不要重复登录');
}
// cookie 登录
if(isset($_POST['submit'])){
	if(isset($_POST['username']) && isset($_POST['password']) && $_POST['username']==='admin' && $_POST['password']==='123456'){
		if(setcookie('username',$_POST['username'],time()+3600)){
			header('Location:skip.php?url=index.php&info=登录成功，正在跳转中！');
		}else{
			echo 'cookie设置失败！';
		}
	}else{
		header('Location:skip.php?url=index.php&info=对不起，用户名或密码填写错误，登录失败！');
	}
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>请登录</title>
</head>
<body>
<form method="post" action="login.php">
	姓名：<input type="text" name="username" />
	密码：<input type="password" name="password" />
	<input type="submit" name="submit" value="登录" />
</form>
</body>
</html>