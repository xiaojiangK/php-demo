//把可变的当参数传递
function ajax(method, url, data, success) {

	//使用错误机制 创建对象
	var xhr = null;
	try {
		xhr = new XMLHttpRequest();
	} catch (e) {
		xhr = new ActiveXObject('Microsoft.XMLHTTP');
	}
	
	//提交方式为get时 需要判断为get && 数据,并把数据用?连接到url后面传递
	if (method == 'get' && data) {
		url += '?' + data;
	}
	
	//可变的通过参数传递,true 异步进行
	xhr.open(method,url,true);

	//提交方式为get时 直接send();
	if (method == 'get') {
		xhr.send();
	} else {
	//为post时 需要设置请求头信息,以及把数据放send方法当参数传递
		xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
		xhr.send(data);
	}
	
	//当AJAX状态码改变时
	xhr.onreadystatechange = function() {
		//当状态码为4成功 则执行下面代码
		if ( xhr.readyState == 4 ) {
			//当服务器状态码为200 成功时 则执行下面代码
			if ( xhr.status == 200 ) {
				//操作行为 ,当有回调函数时,则执行回调函数内的代码,则把获取到的内容通过参数传递
				success && success(xhr.responseText);
			} else {
				//出错时,则弹出错误信息
				alert('出错了,Err：' + xhr.status);
			}
		}
		
	}
}