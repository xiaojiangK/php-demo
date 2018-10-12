<?php
function skip($url,$pic,$message){
$html=<<<A
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="refresh" content="3;url={$url}" />
<title>正在跳转中</title>
</head>
<body>
<div class="notice">
	<span class="{$pic}"></span> {$message} <a href="{$url}">3秒后自动跳转中!</a>
</div>
</body>
</html>
A;

echo $html;
exit();

}

?>

<style type="text/css">
	.notice{width:100%; height: 50px; line-height: 50px; text-align: center; font-size: 15px;}
	.error{color:red;}
	.ok{color:green;}
</style>