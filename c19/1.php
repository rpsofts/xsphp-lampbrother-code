<?php
/*
 *  封装性： 面向对象的三大特性之一
 *
 *  1. 就是把对象的成员（属性，方法）结合成一个独立的相同单位，并尽可能隐藏对象的内部细节
 *
 *   public  protected  
 *
 *   private 私有的， 用这个关键字修饰的成员，只能在对象内部访问（只有用$this访问），不能在对象外部使用
 *
 *   属性可以封装：
 *   		只要一个变量，需要在多个方法使用，就将这个方法声明为成员属性，可以直接在这个对象中的所有方法中使用
 *
 *   		成员属性，就相当于这个对象中的全局变量
 *
 *   		成员属性都会在方法中使用， 成员属性值的变化其实就是在改变方法的执行行为， 也就是改变了对象的功能
 *
 * 		成员属性的值如果不正常， 方法执行的功能也就不正常 了
 *
 * 		450ma--650mA --- 5A 
 *
 * 		3.8--4.2V  ---  220v
 *
 *		作用：不需要在对象外部改变或读取它的值
 *
 *			1. 封装
 *
 *			再提供一个公有的方法(经过方法对象成员属性进行赋值和取值就可以控制)
 *   方法也可以封装：
 *
 *   	作用：
 *   		1. 使用private修饰使用其只能在内部使用
 *		2. 一个类中有100个方法， 封装了95个（为另外的5个服务的方法）， 只有5个方法可以使用
 *     	
 *      
 *      100成员属性，都让取值，值都不可以改值
 *
 *      和封装有关的魔术方法：
 *
 *       __set()：是直接设置成员属性值时，自动调用的方法
 *       __get()：是直接获取成员属性值时，自动调用的方法
 *       __isset();
 *       __unset();
 *   
 *      
 *       
 *
 */
	class Person {
		private $name;
		private $age;
		private $sex;
	
		function __construct($name="", $age=0, $sex="男"){
			$this->name=$name;
			$this->age=$age;
			$this->sex=$sex;
		}

		function getPro($name){
			return $this->$name;
		}

		function setAge($age){
			if($age > 100 || $age < 0 )
				return;
			$this->age=$age;
		}

		function getAge(){
			if($this->age < 30)
				return $this->age;
			elseif($this->age < 40)
				return $this->age-5;
			elseif($this->age < 50)
				return $this->age-10;
			else
				return $this->age-15;
		}

		function say(){
			echo "我的名子：{$this->name}，我的年龄：{$this->age}，我的性别：{$this->sex}。<br>";
		}

		function run(){
			$this->left();
			$this->left();
			$this->right();
			$this->right();
			$this->gogo();
			$this->gogo();
			$this->gogo();
		}

		private function left(){
			echo "LLLLLLLLLLLLL<br>";
		}
		private function right(){
			echo "RRRRRRRRRRRRRR<br>";
		}

		private function gogo(){
			echo "GGGGGGGGGGGGGGGGG<br>";	
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
//$p1->age=50000;
//echo $p1->age;

$p1->setAge(55);

echo $p1->getAge()."<br>";

//$p1->say();

