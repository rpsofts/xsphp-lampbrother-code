<?php
/* 数组的相关处理函数
 * 
 *  一 数组键/值操作有关的函数
 *  	1.  array_values()
 *  	2.  array_keys()
 *  	3.  in_array()
 	4. array_key_exists
	5.array_flip -- 交换数组中的键和值
	6. array_reverse --  返回一个单元顺序相反的数组 
   
    二、 统计数组元素的个数和惟一性

    1. count() sizeof();
     
 *
 *
 */

$lamp=array("os"=>"linux", "webserver"=>"Apache", "db"=>"MySql", "laguage"=>"php", "html"=>"100", 10=>"linux", array(1, 2, 3,4,5,6,7));

echo count($lamp, 1);

echo '<pre>';
print_r($arr);
echo '</pre>';

