<?php
header('content-type:text/html;charset=utf-8');
//定义父类
class Human{
	public $name;
	public $height;
	public $weight;
	
	public function eat($food){
		echo $this->name.' eatting '.$food;
	}
}
//子类继承父类关键字 extends
//extends后只能跟一个
class NbaPlayer extends Human{
	//定义属性
	public $team = 'Timberwolves';
	public $playerNumber = '21';
	//构造函数 在对象被实例化时自动调用
	function __construct($name,$height,$weight,$team,$playerNumber){
		echo 'Constructing'.'<br/>';
		//$this在php中是伪变量 表示对象自身 
		//可以通过$this->的方式访问对象的属性和方法
		//子类可以通过$this访问父类的属性
		$this->name=$name;
		$this->height=$height;
		$this->weight=$weight;
		$this->team=$team;
		$this->playerNumber=$playerNumber;
	}
	//析构函数 在程序执行结束后自动调用 
	function __destruct(){
		echo 'destructing'.'<br/>';
	}
	//定义方法
	public function run(){
		echo 'running'.'<br/>';
	}
	public function jump(){
		echo 'jumpping'.'<br/>';
	}
	public function dribble(){
		echo 'dribbling'.'<br/>';
	}
	public function shoot(){
		echo 'shootting'.'<br/>';
	}
	public function dunk(){
		echo 'dunking'.'<br/>';
	}
	public function pass(){
		echo 'passing'.'<br/>';
	}
}
	//类到对象的实例化
	//类的实例化为对象时使用关键字new 之后紧跟类的名称和一队();
	$garnett = new NbaPlayer('Garnett','211cm','120kg','Timberwolves','21');
	//对象成员的属性可以通过->来访问
	echo $garnett->name.'<br/>';
	//对象成员的方法可以通过->来访问
	$garnett->pass();
	$garnett->shoot();
	//子类的对象可以直接访问父类定义的方法
	$garnett->eat('apple').'<br/>';
	$james = new NbaPlayer('James','203cm','120kg','heat','6');
	echo $james->team.'<br/>';
	//通过把变量设为NULL 可以触发析构函数的调用
	//$james = null;
	echo 'this is test'.'<br/>';
?>