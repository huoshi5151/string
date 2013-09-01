<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<?php
/**
 * 如果不存在，将会返回0，应该是false的，但是也可能会和位置为第一的那个字符混淆，所以在if语句中可以用===来避免
 * 
 * @var string
 */
$test='hello world';
// echo strpos($test, 'o',5);
$str=strpos($test, 'h');
var_dump($str);	//返回false，而false又等价于0，所以if中要用===

if ($str===false) {	//这里的false如果写成0就容易混淆了
	echo 'h出现在0位';
}

 ?>