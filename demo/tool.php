<?php
function skip($url,$pic,$message){
$html=<<<A
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<meta http-equiv="refresh" content="3;URL={$url}" />
<title>正在跳转中</title>
<style>
.notice{width: 100%; height: 60px; font-size: 16px; background: #fafafa; line-height: 60px; text-align: center;}
.notice a{color: #666;} 
.notice .pic{margin-right: 3px; display: inline-block; border-radius: 50%; width: 12px; height: 12px;}
.notice .ok{background: #67c23a;}
.notice .err{background: #f56c6c;}
.notice .tip{background: #409eff;}
.notice .help{background: #909399;}
</style>
</head>
<body>
<div class="notice"><span class="pic {$pic}"></span> {$message} <a href="{$url}">3秒后自动跳转中!</a></div>

<script>
	setTimeout(function(){
		location.href="{$url}";
	},3000);
</script>

</body>
</html>
A;
echo $html;
exit();
}
?>