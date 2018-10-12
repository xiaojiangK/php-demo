

$(function () {
		$('input').click(function () {
		$.get('test.php?url=ycku', function (response, status, xhr) {
			$('#box').html(response);
		});
	});
	/*
	$('input').click(function () {
		$.get('test.php?url=ycku', function (response, status, xhr) {
			$('#box').html(response);
		});
	});
	
	//通过直接在url问号紧跟传参
	
	$('input').click(function () {
		$.get('test.php', 'url=ycku',function (response, status, xhr) {
			$('#box').html(response);
		});-
	});
	
	//通过第二个参数data，字符串形式的键值对传参，然后自动转换为问号紧跟传参
	
	$('input').click(function () {
		$.get('test.php', {
			url : 'ycku'
		},function (response, status, xhr) {
			$('#box').html(response);
		});
	});
	
	//通过第二个参数data，对象形式的键值对传参，然后自动转换为问号紧跟传参
	

	$('input').click(function () {
		$.post('test.php?url=ycku', function (response, status, xhr) {
			$('#box').html(response);
		});
	});
	
	//post提交不能使用问号传参
	
	$('input').click(function () {
		$.post('test.php', 'url=ycku',function (response, status, xhr) {
			$('#box').html(response);
		});
	});
	
	//post提交可以使用字符串形式的键值对传参，自动转换为http消息实体传参
	
	$('input').click(function () {
		$.post('test.php', {
			url : 'ycku'
		},function (response, status, xhr) {
			$('#box').html(response);
		});
	});
	
	//post提交可以使用对象键值对
	+
	$('input').click(function () {
		$.post('test.php', {
			url : 'ycku'
		},function (response, status, xhr) {
			$('#box').html(response);
		}, 'html');													//PHP文件返回的数据是纯文本，默认是html或text
	});
	
	
	$('input').click(function () {
		$.post('test.php', {
			url : 'ycku'
		},function (response, status, xhr) {
			$('#box').html(response);
		}, 'json');												
	});
	
	//本身是纯文本，如果强行按照xml或者json数据格式返回的话，那么就无法获取数据
	
	$('input').click(function () {
		$.post('test.xml',function (response, status, xhr) {
			alert(response);
		}, 'html');																			//默认type就已经是xml		
	});
	
	
	//如果默认已经是xml，强行设置为html，则会连xml标签也返回
	
	$('input').click(function () {
		$.post('test.xml',function (response, status, xhr) {
			alert($(response).find('root').find('url').text());
		});																	
	});
	
	$('input').click(function () {
		$.post('test.json',function (response, status, xhr) {
			alert(response[0].url);
		});																	
	});
	
	$('input').click(function () {
		$.getJSON('test.json',function (response, status, xhr) {
			alert(response[0].url);
		});																	
	});

	$('input').click(function () {
		$.getScript('test.js');																	
	});
	*/

	

	
});


























