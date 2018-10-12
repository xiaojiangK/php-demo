<?php
	header('Content-type:text/html; charset=utf8');
	
	$link = @mysqli_connect('localhost', 'root', '123456', 'youyouwang', 3306);
	
	if(mysqli_connect_errno($link)){
		exit(mysqli_connect_error($link));
	}

	mysqli_set_charset($link, 'utf8');
	mysqli_select_db($link, 'youyouwang');
	
	if(isset($_GET['info'])){
			
		$query = 'select * from infopaging';
		$result = mysqli_query($link, $query);
		$datas = array();
		
		while($data = mysqli_fetch_assoc($result)){
			
			array_push($datas,$data);
	
		}
		
		echo json_encode($datas);
		
	}
	
?>
