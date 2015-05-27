<?php
/* 数组的相关处理函数
 * 
 *  一 数组键/值操作有关的函数
 *  	1.  array_values()
 *  	2.  array_keys()
 *  	3.  in_array()
 	4. array_key_exists
	5.array_flip -- 交换数组中的键和值
 *
 *
 */

$lamp=array("os"=>"linux", "webserver"=>"Apache", "db"=>"MySql", "laguage"=>"php", "html"=>"100", 10=>"linux");

$arr=array_flip($lamp);

echo '<pre>';
print_r($arr);
echo '</pre>';

