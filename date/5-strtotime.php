<?php
header('content-type:text/html;charset=utf-8');
//strtotime()将英语字符串解析为UNIX时间戳
echo time();
echo '<br/>';
echo strtotime('now').'<br/>';
echo date('Y-m-d H:i:s',time()).'<br/>';
echo date('Y-m-d H:i:s',time()+24*60*60).'<br/>';
echo date('Y-m-d H:i:s',strtotime('+1 day')).'<br/>';
echo date('Y-m-d H:i:s',strtotime('-1 day')).'<br/>';
echo date('Y-m-d H:i:s',strtotime('+5 days')).'<br/>';
echo date('Y-m-d H:i:s',strtotime('+1 month')).'<br/>';
echo date('Y-m-d H:i:s',strtotime('+2 years 3months 15 days')).'<br/>';
session_decode(data);
