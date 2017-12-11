<?php
//index 单一入口文件
//自动加载类
//当调用的类不存在则自动运行
//传入参数 $name 当调用boot 时自动加载 $name(Boot.php) 文件
function __autoload($name){
//	输出调用类名
	echo $name;
//	当类不存在 自动运行 找到指定的目录加上调用的类 得到完整路径
	include '../houdunwang/core/'.$name . '.php';
}
(new Boot())->run();
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

</body>
</html>

