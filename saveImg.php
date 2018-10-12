<?php
header('Content-type:text/html;charset=utf-8');//默认情况header('Content-type:text/html');
$img=imagecreatetruecolor(200,200);//新建一个长和高都为200像素的真彩色图像
$color1=imagecolorallocate($img,50,50,50);//分配颜色
$color2=imagecolorallocate($img,229,36,36);//分配颜色
$color3=imagecolorallocate($img,46,219,50);//分配颜色
imagefill($img,0,0,$color3);
if(imagejpeg($img,'file/sunshengli.jpeg')){//保存图像
	echo '保存成功！';
}
imagedestroy($img);

// gd库输出图片