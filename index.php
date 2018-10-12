<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
	<table cellpadding="8" cellspacing="0" border="1px">
		<tr>
			<td>id</td>
			<td>用户名</td>
			<td>密码</td>
			<td>邮箱</td>
			<td>手机号</td>
			<td>注册时间</td>
			<td>操作</td>
		</tr>
	</table>

	<script>
		$.ajax({
			url: '',
			type: 'get',
			dataType: 'json',
			success: function (res){
				console.log()
			}
		});
	</script>
</body>
</html>
