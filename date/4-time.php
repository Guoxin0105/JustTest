<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('Asia/Shanghai');
//得到当前时间戳
echo time();
echo '<br/>';
echo date('Y-m-d H:i:s',time());
echo '<hr/>';
echo '一天后的时间为：'.date('Y-m-d H:i:s',time()+24*60*60).'<br/>';
echo '一周后的时间为：'.date('Y-m-d H:i:s',time()+7*24*60*60).'<br/>';
echo '14天前的时间为：'.date('Y-m-d H:i:s',time()-14*24*60*60).'<br/>';
//mktime('H,i,s,n,j,Y')得到制定日期的时间戳
//2017 1 5 不设置默认取得当前时间戳
echo date('Y-m-d H:i:s',mktime(0,0,0,1,5,2017)).'<br/>';
echo date('Y-m-d H:i:s',mktime(0,0,0,1,5)).'<br/>';
echo date('Y-m-d H:i:s',mktime(0,0,0,1)).'<br/>';
echo date('Y-m-d H:i:s',mktime(0,0,0)).'<br/>';
echo date('Y-m-d H:i:s',mktime(0,0)).'<br/>';
echo date('Y-m-d H:i:s',mktime(0)).'<br/>';
//计算两个日期的时间差
$birth = mktime(0,0,0,1,5,1995);
$time = time();
$age = floor(($time-$birth)/(60*60*24*365));//floor()舍去小数部分
echo $age;