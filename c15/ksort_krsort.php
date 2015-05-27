<?php
/* 数组的排序函数
 *    sort()
 *    rsort()
 *    usort()
 *    asort()
 *    arsort()
 *    uasort()
 *    ksort()
 *    krsort()
 *    uksort()
 *    natsort()
 *    natcasesort()
 *    array_multisort()
 *
 *    1. 简单的数组排序
 *      sort() rsort()
 *    2. 根据键名对数组排序
 *    	
 * 
 * 拆分、合并、分解、接合的数组函数
 *
 * 数组与数据结构的函数
 *
 * 其它与数据操作有关的函数
 *
 *
 *
 */

$data=array(5=>"five",8=>"eight",1=>"one", 7=>"seven",2=>"two");

ksort($data);
print_r($data);

krsort($data);
print_r($data);
