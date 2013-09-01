<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>strtok</title>
</head>
<body>
	
</body>
</html>
<?php 
$feedback="Your customer service is excellent";
$token=strtok($feedback, " ");
while ($token!= false) {
	echo $token.'<br>';
	$token=strtok(" ");	//这里不需要再指定字符串，他会记住自己当前函数所在的位置
}
 ?>