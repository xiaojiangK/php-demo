<?php
header('Content-type:text/html;charset=utf-8');
if (isset($_POST['submit'])) { // 判断是否存在'submit'这个变量
    if (is_uploaded_file($_FILES['myfile']['tmp_name'])) { // 判断文件名是否是通过 HTTP POST 上传的 (tmp_name 路径)
        $arr = pathinfo($_FILES['myfile']['name']); // pathinfo — 返回文件路径的信息 然后通过arr['extension']获取到后缀名
        $newName = date('YmdGis') . rand(1000, 9999); // 新的用户名
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], "file/{$newName}.jpg")) {
            echo '恭喜您!上传成功' . "<br/>"; // move_uploaded_file — 将上传的文件移动到新位置
            var_dump($_FILES['myfile']); // 获取到文件信息
        } else {
            echo '对不起上传失败';
        }
    } else {
        exit('可能有攻击，请你做合法的事情！');
    }
}

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>上传页面</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile" /> <input type="submit" name="submit" value="开始上传" />
	</form>
</body>
</html>
