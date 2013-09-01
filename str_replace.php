<?php 
/**
 * 字符串替换
 * @var string
 */
$str='hello world';
echo str_replace('world', 'xiaoming', $str);
$arr = array('blue','red','yellow','dark');
print_r(str_replace('e', 'E', $arr,$count));	//第四个可选参数是统计替换的数量
echo $count;
 ?>