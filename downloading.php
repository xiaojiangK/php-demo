<?php
 if(!function_exists('finfo_open')){
	header('Content-type:text/html;charset=utf-8');
	exit('请先开启PHP扩展:fileinfo！');
}
$file='file/notepad++.exe';
$fileinfo=finfo_open(FILEINFO_MIME_TYPE);
$mimeType=finfo_file($fileinfo,$file);
finfo_close($fileinfo);
//发送指定的文件MIME类型的头信息
header('Content-type:'.$mimeType);
//指定下载文件的描述
header('Content-Disposition:attachement;filename='.basename($file));
//指定文件的大小
header('Content-Length:'.filesize($file));
//读取文件内容至输出缓冲区,返回这个文件
readfile($file);




