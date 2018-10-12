<?php
	header('Content-type:text/html; charset=utf8');

	include_once 'tool.php';

	$link = @mysqli_connect('localhost', 'root', '123456', 'test', 3306);

	if(mysqli_connect_errno($link)){
		exit(mysqli_connect_error($link));
	}

	mysqli_set_charset($link, 'utf8');

	if (isset($_GET['type'])) {

		if ($_GET['type'] == 'select'){

			$query = 'select * from userinfo';
			$result = mysqli_query($link, $query);
			$arr = array();

			while ($data = mysqli_fetch_assoc($result)) {    
				array_push($arr, $data);
			}

			echo json_encode($arr);
		}

		if ($_GET['type'] == 'add') {
			if (empty($_GET['username'])){
				skip('index.html', 'err', '用户名不得为空！');
			}

			if (empty($_GET['password'])){
				skip('index.html', 'err', '密码不得为空！');
			}
			else if (strlen($_GET['password']) < 6){
				skip('index.html', 'err', '密码不得小余6位！');
			}
			else if (strlen($_GET['password']) > 18){
				skip('index.html', 'err', '密码不得大余18位！');
			}

			if (empty($_GET['phone'])){
				skip('index.html', 'err', '手机号不得为空！');
			}
			else if (strlen($_GET['phone']) > 11){
				skip('index.html', 'err', '请输入正确的手机号！');
			}

			//检查邮箱
			if (empty($_GET["email"])){
				skip('index.html', 'err', '电子邮箱不得为空');
			}
			else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_GET["email"])) {
				skip('index.html', 'err','非法的电子邮箱！');
			}

			$query = "select * from userinfo where username='{$_GET['username']}'";
			$result = mysqli_query($link, $query);

			if (mysqli_num_rows($result)){
				skip('index.html', 'err', '这个用户名已经被别人注册了！');
			}

			$query = "insert into userinfo(username, password, email, phone, reg_time) values('{$_GET['username']}', md5({$_GET['password']}), '{$_GET['email']}', '{$_GET['phone']}', now())";
			$result = mysqli_query($link, $query);

			// 转移入库
			mysqli_real_escape_string($link, $query);

			if (mysqli_affected_rows($link) == 1) {
				skip('index.html','ok','恭喜你，添加成功！');
			}
			else {
				skip('index.html','error','对不起，添加失败，请重试！');
			}

		}

		if ($_GET['type'] == 'remove' && !empty($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0){

			$query = 'delete from userinfo where id = '.$_GET['id'];

			$result = mysqli_query($link, $query);

			if (mysqli_affected_rows($link) == 1){
				skip('index.html','ok','删除成功！');
			}
			else {
				skip('index.html','ok','对不起，删除失败，请重试！');
			}

		}

	}

?>

<?php
	
	header('Content-type:text/html; charset=utf8');

	$link = @mysqli_connect(localhost, root, 123456, test, 3306);

	if (mysqli_connect_errno()){
		
	}

?>