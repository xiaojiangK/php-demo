

$(function () {
	
	/*
	$('input').click(function () {
		$.ajax({
			type : 'POST',
			url : 'test.php',
			data : {
				url : 'ycku'
			},
			success : function (response, status, xhr) {
				$('#box').html(response);
			}
		});
	});

	
	
	$('form input[type=button]').click(function () {
		$.ajax({
			type : 'POST',
			url : 'user.php',
			data : {
				user : $('form input[name=user]').val(),
				email : $('form input[name=email]').val(),
			},
			success : function (response, status, xhr) {
				$('#box').html(response);
			}
		});
	});
	
	//表单元素特别多的情况下，写起来非常麻烦，容易出错
	//复制提交的JS内容时，data属性需要修改的非常多
	
	$('form input[type=button]').click(function () {
		$.ajax({
			type : 'POST',
			url : 'user.php',
			data : $('form').serialize(),
			success : function (response, status, xhr) {
				$('#box').html(response);
			}
		});
	});
	
	
	alert($('form').serialize());			//字符串形式的键值对，并且还对URL进行的编码
	
	$('form input[name=sex]').click(function () {
		$('#box').html(decodeURIComponent($(this).serialize()));
	});
	
	$('form input[name=sex]').click(function () {
		//$('#box').html($(this).serializeArray());
		//console.log($(this).serializeArray());
		var json = $(this).serializeArray();
		$('#box').html(json[0].name + '=' +json[0].value);
	});

	
	//初始化重复的属性
	$.ajaxSetup({
		type : 'POST',
		url : 'user.php',
		data : $('form').serialize(),
	});
	

	$('form input[type=button]').click(function () {
		$.ajax({
			success : function (response, status, xhr) {
				$('#box').html(response);
			}
		});
	});
	*/

	
	$('form input[type=button]').click(function () {
		$.ajax({
			type : 'POST',
			url : 'user.php',
			data : $.param({
				user : $('form input[name=user]').val(),
				email : $('form input[name=email]').val()
			}),
			success : function (response, status, xhr) {
				$('#box').html(response);
			}
		});
	});
	
	

});


























