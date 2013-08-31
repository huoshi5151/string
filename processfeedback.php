<?php 
$name=trim($_POST['name']);
$name=$_POST['name'];
$email=trim($_POST['email']);
$feedback=trim($_POST['feedback']);

$toaddress="wt371@qq.com";

$subject="意见反馈邮件";

$mailcontent="姓名：\n".$name."<br>".
			"email:\n".$email."<br>".
			"信息：\n".$feedback."<br>";

$fromaddress="From: wt371@acgwan.com";
echo $mailcontent;
die;
mail($toaddress, $subject, $mailcontent,$fromaddress);

 ?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 	<title>邮件发送处理页面</title>
 </head>
 <body>
 	<p>您的邮件已发送</p>
 </body>
 </html>