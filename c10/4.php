<?php
 /*
  *  1. 内部函数： PHP可以在函数内部再声明函数
  *  		  目的就是在函数的内部调用
  *  		  就是用来帮助外部函数完成一些子功能的。
  *
  *
  *  2. 递归函数: 就是在自己内部调用自己的函数名
  *
  *
  *  3. 重用函数
  *
  *
  *  4. 一些系统函数的使用
  *
  *  
 *
  */


    function total($dirname, &$dirnum, &$filenum){
	    $dir=opendir($dirname);
	    readdir($dir)."<br>";
	    readdir($dir)."<br>";
	    while($filename=readdir($dir)){
		   $newfile=$dirname."/".$filename;

		   if(is_dir($newfile)){
			 total($newfile, $dirnum, $filenum);  
		    	 $dirnum++;
		    }else{
		    	 $filenum++;
		    }
	    }
	   closedir($dir);	 
    }

   $dirnum=0;
   $filenum=0;
   total("C:/AppServ/www/phpMyAdmin", $dirnum, $filenum);

   echo "目录总数:".$dirnum."<br>";
   echo "文件总数:".$filenum."<br>";
