<?php
header('content-type:text/html;charset=utf-8');
/*
date_default_timezone_set($timezone);动态设置时区
date_default_timezone_get();得到当前时区
修改配置文件，date_timezone=PRC,重启服务器，对所有脚本有效
*/
echo '当前时区为：'.date_default_timezone_get().'<br/>';//UTC
date_default_timezone_set('Asia/Shanghai');
echo '<br/>';
echo '当前时区为：'.date_default_timezone_get();
echo '<br/>';
/*
ini_set();运行时设置PHP配置选项
ini_get();获得配置选项的值
*/
echo ini_get('date.timezone');
echo '<br/>';
echo ini_set('date.timezone','Asia/Shanghai');