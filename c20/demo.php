<?php
/*
 * 继承性： 
 * 	1. 他也是面向对象的三大特性之一
 * 	2. 开放性、可扩充性
 * 	3. 增加代码的重用性
 * 	4. 提高了软件的可维护性
 *
 *      5. 继承就是用子类去”扩展“父类
 *
 *      6. 鸟--- 砖头
 *
 *      C++ 属于多继承, 同一个类可以有多个父类
 *
 *      PHP和Java属于单继承， 同一个类只能有一个父类
 *
 *      不管多继承的还是单继承的都可以有多个子类
 *
 *      只要你在设计两个类时，有可以共享的成员，就将可以共享的内容拿出来，单独作为一个基类使用
 *
 *      父类--基类
 *      子类--派生类
 *
 *      
 *
 *
 * 	作用：
 *
 *
 * 一、类继承的应用
 *
 *	 1. 	声明一个子类，使用 extends 关键字 去继承（扩展）一个父类
 *
 * 	2.  子类可以从父类，继承所有的内容，包括成员属性，成员方法， 构造方法 ..., 在子类中都可以直接使用
 *
 * 	3. 父之间的层次关系设计好
 *
 * 二、访问类型控制
 * 	虽然子类可以从父类中继承所有内容，但private的成员， 只能在本类中使用， 子类中也不能使用
 *
 * 	封装时，即可以让自己类的内部可以访问，也让子类可以用，但类的外部不能使用， private --> protected
 *
 * 三、子类中重载父类的方法
 *
 *   1. 子类可以声明和父类相同的方法名，即子类覆盖了父类中同名的方法
 *
 *   鸟类---鸵鸟（飞方法）， 在鸵鸟类中将 “飞的方法改写”
 *
 *   子类的方法对父方法的扩展
 *
 *   在子类中 调用 父类中 被覆盖的方法  
 *	
 *	对象->成员  类::成员
 *
 *   	父类名::方法名()
 *   	parent::方法名()
 *
 *
 *   在子类中编写构造方法，如果父中也有构造方法一定要去调用一次父类中被覆盖的那个构造方法
 *
 *   注意： 子类中重载的方法，不能低于父类中访问权限， （子类可以访大权限，但不能缩小权限）
 *
 */

  class Person1 {
	protected $name;
	protected $age;
	protected $sex;

	function __construct($name, $age, $sex){
		$this->name=$name;
		$this->sex=$sex;
		$this->age=$age;

		echo "###################<br>";
	}


	protected function say(){
		echo "我的名-{$this->name}：，我的年龄：{$this->age}，我的性别：{$this->sex}.<br>";
	}

	 function eat(){
		echo "wwwwwwwwwwwwwwww";
	}

	function run(){
	
	}
  }

  class Student extends Person1 {
	  var $school;
	function __construct($name, $age, $sex, $school){
		parent::__construct($name, $age, $sex);
		$this->school=$school;
	}
	function study(){
		echo "{$this->name}在学习.<br>";
	
		$this->eat();
	}

	public function say(){
		parent::say();
		echo "我所在的学校{$this->school}<br>";
	}
  
  }

  $s=new Student("lisi", 20, "男", "QingHua");

//  $s->say();



