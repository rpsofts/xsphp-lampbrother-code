<?php
/* 数组的相关处理函数
 * 
 *  一 数组键/值操作有关的函数
 *  	1.  array_values()
 *  	2.  array_keys()
 *  	3.  in_array()
 *
 */

$lamp=array("os"=>"linux", "webserver"=>"Apache", "db"=>"MySql", "laguage"=>"php", "html"=>"100", array("a", "b"));

if(in_array(100, $lamp, true)){
	echo "exists";
}else{
	echo "not exists";
}

echo '<pre>';
print_r($arr);
echo '</pre>';
