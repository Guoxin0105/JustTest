<?php
header('content-type:text/html;charset=utf-8');
/*
ini_set();运行时设置PHP配置选项
ini_get();获得配置选项的值
*/
echo ini_get('date.timezone');
echo '<br/>';
ini_set('date.timezone','Asia/Shanghai');
echo ini_get('date.timezone');