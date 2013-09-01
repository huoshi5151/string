<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>explode()</title>
</head>
<body>
	
</body>
</html>
<?php 
/**
 * 输出如下：
 * Array ( [0] => xiaoming [1] => qQ.com ) 
*可以得到qq邮箱，并且通过大小写判断
*xiaoming#qQ.com
 * @var string
 */
$email='xiaoming@qQ.com';	
$email_arr=explode('@', $email);
print_r($email_arr);
if (strtolower($email_arr[1])=='qq.com') {
	echo '<br>可以得到qq邮箱，并且通过大小写判断';
}
$arr=Array ('xiaoming', 'qQ.com' );
$str=implode('#', $arr);
echo '<br>'.$str;
 ?>