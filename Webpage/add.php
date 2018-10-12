<?php
	$con=mysql_connect("localhost","root","123456");//创建连接
	if($con){
		mysql_set_charset("utf8");//设置数据编码类型
		mysql_select_db("page",$con);//选择数据库

		// 储存
		if ($_POST['add']) {
			$sql="insert into userinfo(username,age,QQ,email,tel,job,time) values('{$_POST['username']}','{$_POST['age']}','{$_POST['QQ']}','{$_POST['email']}','{$_POST['tel']}','{$_POST['job']}',now())";
			$result = mysql_query($sql, $con);
			if($result){
				echo 1;
			}else{
				echo 2;
			}
		}

		// 删除
		if ($_POST['remove']) {
			$sql = 'delete from userinfo where id='.$_POST['id'];
			$result = mysql_query($sql);
			if($result){
				echo 1;
			}else{
				echo 2;
			}
		}

		// 修改
		if ($_POST['updata']) {
			$sql = 'update userinfo set '. $_POST['type'] .'='. $_POST['val'] .' where id='.$_POST['id'];
			$result = mysql_query($sql);
			if($result){
				echo 1;
			}else{
				echo 2;
			}
		}

	}
?>