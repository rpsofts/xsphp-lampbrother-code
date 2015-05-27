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
 *    	ksort() krsort()
 *    3. 根据元素的值对数组排序
 *      asort() arsort()
 *    4. 根据“自然数排序”法对数组排序
 *    	natsort()  natcasesort()
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

$data=array("file1.txt", "file11.txt", "File2.txt", "file22.txt");


sort($data);
print_r($data);
echo '<br>';

natsort($data);
print_r($data);
echo '<br>';

natcasesort($data);
print_r($data);
echo '<br>';
