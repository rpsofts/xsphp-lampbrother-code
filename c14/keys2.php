<?php
/* 数组的相关处理函数
 * 
 *  一 数组键/值操作有关的函数
 *  	1.  array_values()
 *  	2.  array_keys()
 *
 */

$lamp=array("os"=>"linux", "webserver"=>"Apache", "db"=>"MySql", "laguage"=>"php");

$arr=array_keys($lamp, "MySql");

echo '<pre>';
print_r($arr);
echo '</pre>';

