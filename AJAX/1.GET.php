<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$username = $_GET['username'];
$age = $_GET['age'];
$job = $_GET['job'];

echo "你的名字是:{$username}, 年龄:{$age}, 职位是:{$job}";
