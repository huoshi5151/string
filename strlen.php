<?php 
/**
 * 一个邮箱一般来讲要大于六位数的
 * @var [type]
 */
$len=strlen('a@a.cn');
if ($len<6) {
	echo 'error'；
}
 ?>