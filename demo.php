<?php

/*
    $name=user;
    unset($name);      //销毁变量

    $abc='test';        //可变变量
    $$abc='小江';       //$test='孙胜利';
    echo $test; 

    $a2=16;
    $a2=&$a3;           //引用变量,改变任何一个变量值都会受到影响
    $a3=17;
    echo $a2; 

    $a3=true;           //布尔类型  true/false
    var_dump($a3);
    
    $a4=10;             //整型变量
    var_dump($a4);
    
    $a5=10.1;
    var_dump($a5);      //浮点数变量
    
    $a6='哈喽';
    var_dump($a6);      //字符串变量
    
    $a7="在字符串中使用变量需加上{变量名:{$a4}}!";
    var_dump($a7);
    
    $a7="在字符串中使用相同引号反斜杠\"转译!{$a4}";
    var_dump($a7); 
    
    $a=<<<www
             定界符!!
    www;
    var_dump($a);
    
    NULL
     null表示一个变量没有值，表示空
          将变量直接赋值为null
          声明的变量尚未被赋值
          被unset函数销毁的变量
     $a=1111;
     unset($a);
     var_dump($a);
     
      变量类型相互转换
      这些呢都是程序运行中不太可控的部分所以在编写代码时最好不要涉及!
      强制转换:
     $a='孙胜利';
    $b=(int)$a;
    $b=(float)$a;
    var_dump($a);
    var_dump($b);

print_r(get_defined_constants());   //预定义常量,大写
   
define("USERNAME", "小江");
常量的值只能是bool,int,float,string类型,不可取消,任何地方都可以用

*/


/*
 
$a=16;
if ($a>10){
    echo ++$a;
}else{
    echo --$a;
}

switch($a){
    case 5:
        echo $a;
    break;
    case 16:
        echo $a;
    break;
    default:
        echo $a;
}

单向条件,双向条件,多向条件,switch语句


for ($i=0; $i<100; $i++){   可定义多个初始值
    echo $i."<br />";
}

$i=0;
while ($i<100){
    echo $i++."<br />";
}

do {
    echo $i++."<br />";
}while ($i<100);

*break,continue,exit/die (当前结束整个程序执行)

*/


/*
function test(){    
    $a=16;          
    echo $a;
}
test();

//自定义函数,局部变量,全局变量(global声明全局变量),(static声明静态变量)
//按值传参,引用传参,默认值传参,可变长度传参

func_get_args();	//返回整个参数
func_get_arg();		//索引值筛选参数
func_num_args();	//整个参数的个数

可变函数:直接把函数赋值给变量

递归函数:递归函数即在函数内部自己调用自己的函数。

内部（内置）函数
*/


/*
 
 $a[0]='1';
 $a[]='1';
 $a=array(
    0=>1,
    1=>2,
 );
 
for ($i=0; $i<count($a); $i++){
     echo $a[$i]; 
}

foreach ($a as $key=>$val){
    echo $key."->".$val."<br />";
}

   
$a=array(
    array('小江',100,true),
    array('李磊',20,true)
);

$arr=array(
    array('小江',100,true),
    array('小名',54,true)
);
echo "<table border='1px' cellpadding='10px' cellspacing='0'>";
foreach ($arr as $val){
    if($val[2]==true){
        $val[2]="男";
    }else{
        $val[2]="女";
    }
    echo "<tr><td>{$val[0]}</td><td>{$val[1]}</td><td>{$val[2]}</td></tr>";
}
echo "<table>";

*/

//$_POST(可以通过$_POST来获取到!)    $_GET(可以通过$_GET来获取到!) 


/*
      
$str="  abcdefghijkmnl   ";
var_dump(trim($str));                 //去除前后空白字符,ltrim(左边字符),rtrim(右边字符),第二参数可筛选去除字符

$str2="abcdefghijkmnl";
echo strtoupper($str2);              //转换为大写,strtolower转换为小写

$str3="abcdefghijkmnlab";
var_dump(substr_count($str3,'ab')); //查找字符出现的次数

$str3="abcdcefghijkmnlab";
var_dump(strpos($str3,'c'));         //字符首次出现的位置

$str3="abcdcefghijkmnlab";
var_dump(strstr($str3,'c'));         //第一次出现的位置开始到$str3结尾的字符串。

echo "<br>";
$str=array(
    'abc123abc',
    '123abcabc',
    'abcab123c'
);
$str1=str_replace(array('1','2','3'),array('一','二','三'),$str,$count);
echo $count;                        //替换的次数
var_dump($str1);                    //参数1:被替换的字符,参数2:要替换的字符,参数3:替换的次数


$s=<<<START
	   <p style="color:red;font-size:128px;">我是P标签</p>" '
START;
    echo htmlspecialchars($s);             //尝试返回给定的字符串$s转译HTML 和 PHP 标记后的结果

$s2=<<<START
	<p style="color:red;font-size:128px;">我是P标签</p>
	<div style="color:red;">我是DIV标签</div>
START;
    echo strip_tags($s2,"<div>");      //尝试返回给定的字符串$s2去除空字符、HTML 和 PHP 标记后的结果,参数2:表示忽略的标签

    
$str='testdqwdwqdwqdqdwq';
echo substr($str,3,2);                  //参数1:截取的字符串,参数2:起始位置在,参数3:截取的个数;起始位置为负数时,则从后面截取


$str='test,test1,test2,test3';
var_dump(explode(',',$str,3));          //使用一个字符串分割另一个字符串,参数3:分割成2串数组

$str='testst';
var_dump(str_split($str,3));            //将字符串转换为数组,参数2:每一段的长度。 

*/


/*
 
  元字符
	\d	匹配任意一个十进制数字，等价于[0-9]
	\D	匹配任意一个除十进制数字以外字符,等价于[^0-9]
	\s	匹配任意一个空白字符,比如换页符、换行符、回车符、制表符、垂直制表符
	\S	匹配除空白字符以外的任何一个字符
	\w	匹配任意一个数字或字母或下划线
	\W	匹配除数字、字母、下划线以外的任意一个字符
	.	匹配除换行符以外的任意一个字符
	
	*	匹配0次、或1次、或多次其前面的字符
	+	匹配1次或多次其前面的字符
	?	匹配0次或1次其前面的字符
	{n}	表示其前面字符恰好出现n次
	{n,}	表示其前面字符出现不少于n次
	{n,m}	表示其前面的字符至少出现n次，最多出现m次
	
	^或\A	匹配字符串开始位置
	$或者\Z	匹配字符串的结束位置
	
	|	匹配两个或多个模式
	
	[]	匹配方括号中的任意一个字符
	[^]	匹配除方括号中字符以外的任意一个字符
	
	()	将括号中作为一个整体以便将其中的内容获取到
		在我们的正则表达式中 可以使用圆括号来将某一段括起来，在圆括号的后面部分，我们可以使用
		\\数字 来代表圆括号部分所匹配到的内容！
		
		
模式修正符
	常见模式修正符
	i	在和模式进行匹配时不区分大小写
	m	多行匹配，如果目标字符串 中没有"\n"字符, 或者模式中没有出现^或$, 设置这个修饰符不产生任何影响
	s	如果设定了此修正符，那么.将匹配所有的字符包括换行符
	U	禁止贪婪匹配

 */

/*
if(extension_loaded('gd')) {
  echo '你可以使用gd<br>';
  foreach(gd_info() as $cate=>$value)
    echo "$cate: $value<br>";
}else
  echo '你没有安装gd扩展';
*/
header('Content-type:image/jpeg');
$width=120;
$height=40;
$img=imagecreatetruecolor($width, $height);

$color=imagecolorallocate($img,rand(200,255), rand(200,255), rand(200,255));
$colorBorder=imagecolorallocate($img,rand(50,150), rand(50,150), rand(50,150));
$colorString=imagecolorallocate($img,rand(200,250), rand(200,250), rand(200,250));

for($i=0; $i<3; $i++){
    imageline($img,rand(0,$width/2),rand(0,$height),rand($width/2,$width),rand(0,$height), $colorBorder);
}
for($i=0; $i<100; $i++){
    imagesetpixel($img,rand(0,$width),rand(0,$height),$colorBorder);
}
$string=null;
$arr=array('a','b','c', 'd','e','f','g','h','i','j','k','m','n','o','p','q','r','s', 't','u','v','w','x','y','z');
for($i=0; $i<5; $i++){
    $string.=$arr[rand(0,count($arr)-1)];
}

imagettftext($img,15,rand(-5,5),rand(5,15),rand(30,40), $colorString,'font/SketchyComic.ttf', $string);

imagefill($img,0,0, $color);
imagejpeg($img);
imagedestroy($img);
?>
