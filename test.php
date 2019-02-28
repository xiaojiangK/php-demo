<?php 

	// 命名空间
	namespace Article;

	const PATH = '/article';

	function getCommentTotal() {
	    return 100;
	}

	class Comment { }


	namespace MessageBoard;

	const PATH = '/message_board';

	function getCommentTotal() {
	    return 300;
	}

	class Comment { }

	//调用当前空间的常量、函数和类
	echo PATH; ///message_board
	echo getCommentTotal(); //300
	$comment = new Comment();

	//调用Article空间的常量、函数和类
	echo \Article\PATH; ///article
	echo \Article\getCommentTotal(); //100
	$article_comment = new \Article\Comment();

	echo '<br/><br/>';


	// 面向对象
	class Parents {
		var $str = 'str';			// 公有的类成员可以在任何地方被访问。
		// public $str = 'str'		// 公有的类成员可以在任何地方被访问。
		// protected $str = 'str'	// 受保护的类成员则可以被其自身以及其子类和父类访问。
		// private $str = 'str'		// 私有的类成员则只能被其定义所在的类访问。
		function __construct($name, $age) {
			$this->name = $name;
			$this->age = $age;
		}
		function showAge() {
			echo $this->age.' '.$this->str;
		}
	}

	class Works extends Parents {
		function __construct($name, $age, $job) {
			parent::__construct($name, $age);	// 执行父类的构造函数
			$this->job = $job;
		}
		function __destruct() {
	       	print "销毁 " . $this->job . "\n";
	   	}
		function showJob() {
			echo $this->job;
		}
	}

	// 类的事例
	$w = new Works('blue',18,'程序');
	$w->showJob();
	$w->showAge();		// 执行从父类继承的showAge方法

	echo '<br/><br/>';

	// Date
	echo date("Y/m/d") . "<br>";
	echo date("Y.m.d") . "<br>";
	echo date("Y-m-d");

	echo '<br/><br/>';

	// Mail
	// $to = "someone@example.com";
	// $subject = "Test mail";
	// $message = "Hello! This is a simple email message.";
	// $from = "someonelse@example.com";
	// $headers = "From:" . $from;
	// mail($to, $subject, $message, $headers);

	// Filter
	$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
	if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
	    echo("$ip 是一个 IPv6 地址");
	} else {
	    echo("$ip 不是一个 IPv6 地址");
	}
	echo '<br/><br/>';

	// JSON
	$arrs = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
	echo json_encode($arrs);
	echo '<br/><br/>';

	// Mysql
	// $servername = "localhost"; 
	// $username = "root"; 
	// $password = "123456"; 

	// // 创建连接 
	// $conn = new mysqli($servername, $username, $password); 

	// // 检测连接 
	// if ($conn->connect_error) { 
	//     die("Connection failed: " . $conn->connect_error); 
	// } 
	// echo "Connected successfully"; 

	// die('这是一个错误！');


	// $str = 'my is string';
	// echo 'str：'.$str;
	// echo '<br/>';
	// echo '长度：'.strlen($str);
	// echo '<br/>';
	// echo 'my的index：'.strpos($str, 'my');
	// echo '<br/>';

	// $arr = array('red', 'yellow', 'green');
	// $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	// for ($i = 0; $i < count($arr); $i++) {
	// 	echo $arr[$i] . ' ';
	// }
	// echo '<br/>';
	// foreach ($arr as $i) {
	// 	echo $i . ' ';
	// }
	// echo '<br/>';
	// $i=0;
	// $arrlen = count($arr);
	// while ($i < $arrlen) {
	// 	echo $arr[$i].' ';
	// 	$i++;
	// }
	// echo '<br/>';
	// echo '数组长度：'.count($arr);
	// echo '<br/>';

	// foreach ($age as $key => $value) {
	// 	echo $key.' '.$value.' ';
	// }
	// echo '<br/>';
	print_r($GLOBALS);
	echo '<br/><br/>';
	print_r($_SERVER);
	echo '<br/><br/>';
	print_r($_REQUEST);
	echo '<br/><br/>';
	echo $_GET['username']; 
	echo '<br/><br/>';
	echo '这是第 “ '  . __LINE__ . ' ” 行';
	echo '<br/><br/>';
	echo '该文件位于 “ '  . __FILE__ . ' ” ';
	echo '<br/><br/>';
	echo '该文件位于 “ '  . __DIR__ . ' ” ';
	echo '<br/><br/>';
	function test() {
    	echo  '函数名为：' . __FUNCTION__ ;
	}test();
	echo '<br/><br/>';
	class test {
	    function _print() {
		    echo '类名为：'  . __CLASS__ . "<br>";
		    echo  '函数名为：' . __FUNCTION__ ;
	    }
	}
    $t = new test();$t->_print();
	echo '<br/><br/>';

?>