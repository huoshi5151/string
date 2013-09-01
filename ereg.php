<?php 
$email='xiaoming@qq.com';
$val=fnmatch('^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-]+\.[a-zA-Z0-9_\-\.]+$', $email);
var_dump($val);
 ?>