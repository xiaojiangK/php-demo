<?php 
session_start();
header('Content-type:text/html;charset=utf-8');
if (isset($_SESSION['username']) && $_SESSION['username']==='sunshengli') {
	echo "亲爱的{$_SESSION['username']}您好,欢迎回来！";
	echo "<a href='logout.php'>注销</a>";
}else {
	echo "<a href='login.php'>请登录</a>";
}

?>