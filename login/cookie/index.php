<?php 
header('Content-type:text/html;charset=utf-8');
if (isset($_COOKIE['username']) && $_COOKIE['username']==='admin') {
	echo "亲爱的{$_COOKIE['username']}您好,欢迎回来！";
	echo "<a href='logout.php'>注销</a>";
}else {
	echo "<a href='login.php'>请登录</a>";
}

?>