<?php

header('Content-type:text/html; charset:utf-8');

class Persons
{
	function __construct($name, $sex)
	{
		$this->name=$name;
		$this->sex=$sex;
	}

	function showName()
	{
		echo $this->name;
	}

	function showSex()
	{
		echo $this->sex;
	}
}

class Worker extends Persons				//extends 代表Worker 是从 Persons类的继承过来的
{
	function __construct($name, $sex, $job)	//构造函数,把父类的属性传过来
	{
		parent::__construct($name, $sex);	//执行父类的构造函数

		$this->job=$job;					//给Worker添加job属性
	}

	function showJob()						//给Worker添加showjob方法
	{
		echo $this->job;
	}
}

$w1=new Worker('blue', '男', '打杂的');		//new 一个Worker类

$w1->showName();							//执行从父类继承的shouName方法..
$w1->showJob();
?>
</body>
</html>