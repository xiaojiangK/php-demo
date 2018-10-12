<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$username = $_POST['username'];
$age = $_POST['age'];
$job = $_POST['job'];
$from = $_POST['from'];
$girlfriend = $_POST['girlfriend'];

echo "你的名字是:{$username}, 年龄:{$age}, 职位是:{$job}, 来自:{$from}, 女朋友是:{$girlfriend}";
