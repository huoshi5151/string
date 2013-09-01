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
$name='xiao ming';
$email='xiaoming@qq.com';
$feedback='hello world';
$mailcontent="姓名：\n".$name."<br>".
			"email:\n".$email."<br>".
			"信息：\n".$feedback."<br>";
			echo get_magic_quotes_gpc();
echo addslashes(trim($mailcontent));
 ?>