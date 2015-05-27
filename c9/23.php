<?php
/*  PHP的变量的范围
 *	局部变量： 在函数中声明的变量就是局部变量，只能在自己的函数内部使用。
 *	全局变量： 在函数外声明，在变量声明以后的，直到整个脚本结束前都可以使用,包括在函数中和｛｝中都可使用
 *    
 *      PHP的变量分不出 是声明还是使用, 
 *      在PHP中使用全局变量 要通过global关键字将这个全局变量包括到函数中才能使用到，在global声明之后才是使用全局的变量
 *
 *     参数就是局部变量，这个局部变量可以调用 时去赋值。
 *
 *  PHP的静态变量
 *
 *  	静态变量只能声明在函数中（类中），不能在全局声明
 *  	使用static在变量前；
 *
 *  	作用：一个变量可以在同一个函数在多次调用中同用。
 *  	     1. 静态变量在静态代码段中保存
 *  	     2. 一个函数多次调用之间共用，但只在第一次调用 函数时声明到内存，以后再调用用，就不再声明，而直接使用
 *
 *  变量函数：如果一个变量后面有括号$var=hello  $var(), 就将寻找与变量值同名的函数 hello();
 *
 *
 *  1. 函数的功能------------决定是否使用这个函数
 *  2. 函数的参数------------决定函数怎么调用 ---有几个参，传什么类型的值，。。。。
 *  3. 函数的返回值----------调用后怎么处理这个函数
 *
 *  PHP给2000多个函数。。。 都属于系统涵 数，都可以通过名称直接使用。
 *
 *  一定要先使用系统函数，如果系统函数没有你想要的功能，再去自己定义函数
 *
 *  1. 常规函数  
 	bool copy ( string source, string dest ) 
    2. 带有mixed , mixed表示可以传任何类型的数据 
       bool chown ( string filename, mixed user )
    3. 带有&参数的函数， 表示引用赋值， 这个参数不能传值，只能传一个变量，然后函数将变量的值改变，我们在使用这个变量时，值也是变化的
	bool arsort ( array &array [, int sort_flags] )

    4.默认函数 带有[]的函数, 表示这个参数是可选的，如果你传值了就使用你传的值，如果没有传值则使用默认值
    直接在声明函数时，就为参数给初值。
    可选值和必须值， 必须从后向前设置
	bool arsort ( array &array [, int sort_flags] )
    
    5. 带有...的参数函数， ...表示可以传任意多个参数
	int array_unshift ( array &array, mixed var [, mixed ...] )
      
 *
 */

  function demo(){
	  $args=func_get_args();
	  $sum=0;
	  for($i=0; $i<count($args); $i++){
	  	$sum+=$args[$i];
	  }

	  return $sum;
  }
 

 echo  demo(1, 2, 3, 4, 5, 6, 7,8,9);
   
 
