<?php
header('content-type:text/html;charset=utf-8');
//返回微妙和时间戳
echo microtime();
echo '<br/>';
echo time().'<br/>';
//返回时间戳+微妙 四位小数
echo microtime(true).'<hr/>';
$start = microtime(true);
for($i=1;$i<=100000;$i++){
	$arr[]=$i;
}
$end = microtime(true);
echo '程序执行时间为：',$end-$start;
echo '<hr/>';
//得到日期时间的相关信息
print_r(getdate());
echo '<hr/>';
//得到当前的日期时间
print_r(gettimeofday());
echo '<hr/>';
//验证日期的合法性 月日年
var_dump(checkdate(2,29,2016));