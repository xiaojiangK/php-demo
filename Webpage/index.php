<?php
	$index=$_POST["pageIndex"];	// 开始查找index
	$size=$_POST["pageSize"];	// 查找数量

	$con=mysql_connect("localhost","root","123456");//创建连接
	if($con){
		mysql_set_charset("utf8");//设置数据编码类型
		mysql_select_db("page",$con);//选择数据库
		$row=mysql_query('select count(*) as row from userinfo');//总数量
		$b=mysql_fetch_array($row);
		$result=mysql_query("select * from userinfo limit ".$index.",".$size);//操作数据表
		$a=array();
		array_push($a,$b);
		while ($arr=mysql_fetch_array($result)) {
			array_push($a,$arr);	// 把数据push到数组
		}
		echo json_encode($a);//将数组转换成json并返回上一个页面
	}
?>