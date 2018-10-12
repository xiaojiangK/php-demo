<?php 
header('Content-type:text/html;charset=utf-8');
if (isset($_COOKIE['username']) && $_COOKIE['username']==='admin') {
	if(setcookie('username',$_POST['username'],time()-3600)){
		header('Location:skip.php?url=index.php&info=注销成功，正在跳转中！');
	}else{
		header('Location:skip.php?url=index.php&info=注销失败，请稍后重试！');
	}
}
?>