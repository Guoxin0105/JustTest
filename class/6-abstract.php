<?php
header('content-type:text/html;charset=utf-8');
//abstract 关键字用于定义抽象类
abstract class ACanEat{
	//在抽象方法前面加abstract关键字可以表明这方法是抽象方法不需要具体实现
	abstract public function eat($food);
	//抽象类中可以包含普通的方法 有方法的具体实现
	public function breath(){
		echo 'breath use the air'.'<br/>';
	}
}
//继承抽象类的关键字是extends 
class Human extends ACanEat{
	//继承抽象类的子类需要实现抽象类中定义的抽象方法
	public function eat($food){
		echo 'Human eating '.$food.'<br/>';
	}
}
class Animal extends ACanEat{
	public function eat($food){
		echo 'Animal eating'.$food.'<br/>';
	}
}
//Human和Animal共用一个抽象类中的breath方法
$man = new Human();
$man->eat('Apple');
$man->breath();
$monkey = new Animal();
$monkey->eat('Banana');
$monkey->breath();