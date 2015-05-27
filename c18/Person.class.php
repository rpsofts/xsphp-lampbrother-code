<?php
/*
 * 1. 对象中成员的访问（就是在一个对象的内部方法中，去访问本对象中的其它方法和成员属性）
 * 2. 在对象中的方法中都默认有一个$this关键字， 这个关键字代表调用这个方法的对象
 *
 * 3. 第一人称代词：我
 *  
 *  构造方法， 构造器
 *
 *    1. 是对象创建完成以后，“第一个” “自动调用”的方法
 *    2. 构造方法的定义， 方法名一个固定的，
 *    	 在PHP4中 和类名相同的方法就是构造方法
 *    	 在PHP5中 构造方法选择使用 魔术方法 __construct() 所有类中声明构造方法都使用这个名称
 *        	 	优点： 在改变类名时，构造方法不用改变 
 *      作用：就是为成员属性初使化；
 *    	
 *
 *    	魔术方法：
 *    		在类中写出了某个魔术方法， 这个方法对象的功能 就会添加上
 *
 *    		方法名称都固定的（都是系统给我们提供好），没有自己定义的， 
 *
 *    		每一个魔术方法， 都是在不同时刻为了完成某一功能自动调用的方法
 *    		不同的魔术方法有不同调用 时机
 *
 *    		都是以 __开头的方法
 *
 *    		__construct();
 *    		__destruct();
 *
 *    		__set();
 *    		__get();
 *    		__isset();
 *    		__unset();
 *
 *    		__clone();
 *
 *    		__call();
 *
 *    		__sleep();
 *
 *    		__weakup();
 *
 *    		__toString()
 *
 *    		... 
 *
 *              __autoload();
 *  
 *
 *  析构方法：
 *
 *  	1. 当对象被释放之前最后一个 “自动”调用的方法
 *
 * 	使用垃圾回收器（java PHP）而C++手动的释放
 *
 * 	作用：关闭一些资源， 作一些清理的工作
 *
 *      __destruct();
 *
 *    
 *   
 *
 */
	class Person {
		var $name;
		var $age;
		var $sex;
	
		function __construct($name="", $age=0, $sex="男"){
			$this->name=$name;
			$this->age=$age;
			$this->sex=$sex;
		}


		function say(){
			echo "我的名子：{$this->name}，我的年龄：{$this->age}，我的性别：{$this->sex}。<br>";
			$this->eat();
		}

		function run(){
		
		}

		function eat(){
		
		}

		function __destruct(){
			echo $this->name."再见！<br>";
		}
	}

$p1=new Person("zhangsan", 20, "女");
$p2=new Person("lisi", 25);
$p3=new Person("wangwu");

$p1->say();
$p1=null;
$p2->say();
$p3->say();
