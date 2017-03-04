<?php
header ('content-type:text/html;charset=utf-8');
	//截取文件扩展名
function getExt($filename){
	return strtolower(pathinfo($filename,PATHINFO_EXTENSION));
}

//计算器 默认加号
function calc($num1,$num2,$op='+'){
// $num1 = 1;
// $num2 = 2;
// $op = '+';
if(!is_numeric($num1)||!is_numeric($num2)){
	exit ('非法输入...');
}
switch($op){
	case '+':
	$res = $num1+$num2;
	break;
	case '-':
	$res = $num1-$num2;
	break;
	case '*':
	$res = $num1*$num2;
	break;
	case '/':
	if($num2!=0){
		$res = $num1/$num2;
	}else{
		exit ('0不能做除数');
	}break;

}
return "{$num1}{$op}{$num2}=$res";
}
//获取时间日期
function getDateStr($del1='年',$del2='月',$del3='日'){
	$dayArr = array('日','一','二','三','四','五','六');
	$day = date('w');
	return date("Y{$del1}m{$del2}d{$del3} 星期").$dayArr[$day];
}
// echo getDateStr();

//随机验证码
function randWord(){
	for($i=0;$i<4;$i++){
		$str = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
		echo $str{mt_rand(0,strlen($str)-1)};
	}
}
