<?php
header('content-type:text/html;charset=utf-8');
class Human{
	public $name;
	protected $height;
	//protected 只有自身和子类可以访问
	protected $isHungry=true;
}
class NbaPlayer extends Human {
	public $team;
	public $playerNumber;
	//private 只有自身可以访问
	private $age='32';

	function __construct($name,$height,$team,$playerNumber){
		$this->name=$name;
		$this->height=$height;
		$this->team=$team;
		$this->playerNumber=$playerNumber;
		//访问父类的protected成员
		echo $this->height . '<br/>';
	}
	//要获取private成员属性 可以通过封装一个public函数来取得
	//可以在函数体内更改private成员属性
	public function getAge(){
		echo ($this->age - 2);
	}
}
$james = new NbaPlayer('JAMES','203cm','heat','23');
// echo $james->height;
$james->getAge();