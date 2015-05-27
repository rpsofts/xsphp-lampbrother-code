<?php
/* 数组的相关处理函数
 * 
 *  一 数组键/值操作有关的函数
 *  	1 .  array_values()
 *
 */

$lamp=array("os"=>"linux", "webserver"=>"Apache", "db"=>"MySqL", "laguage"=>"php");

$arr=array_values($lamp);


echo '<pre>';
print_r($arr);
echo '</pre>';

