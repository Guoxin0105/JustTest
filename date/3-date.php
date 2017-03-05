<?php
header('content-type:text/html;charset=utf-8');
//分隔符可自定义
echo date('Y-m-d H:i:s');
echo '<hr/>';
//不带前导零的日期
echo date('y-n-j');
echo '<br/>';
//时间带am/AM
echo date('H:i:s a');
echo '<br/>';
echo date('H:i:s A').'<br/>';
//12小时制
echo date('g:i:s').'<br/>';
//获取星期几
$dayArr = array('日','一','二','三','四','五','六');
$day = date('w');
echo '今天是星期'.$dayArr[$day];
echo '<br/>';
switch(date('w')){
	case 0:$dayStr = '日';break;
	case 1:$dayStr = '一';break;
	case 2:$dayStr = '二';break;
	case 3:$dayStr = '三';break;
	case 4:$dayStr = '四';break;
	case 5:$dayStr = '五';break;
	case 6:$dayStr = '六';break;
	default:$dayStr = '非法日期';
}
echo '今天是星期'.$dayStr;
echo '<br/>';
//判断是是否为闰年
$year = date('Y');
if($year%4==0){
	echo '今年是闰年';
}else{
	echo '今年不是闰年';
}
echo '<br/>';
$res = date('L')?'是闰年':'不是闰年';
echo $res;
echo '<hr/>';
//获取本周是今年的第几周
echo '本周是今年的第'.date('W').'周';
echo '<br/>';
//获取今天是全年的第几天
echo '今天是全年的第'.date('z').'天';