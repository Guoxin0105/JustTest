<?php
header('content-type:text/html:charset=utf-8');
$filename="1.txt";
//fopen($filename,$mode) 打开文件
$handle=fopen($filename,'r');
//fread($handle,$size) 读取文件内容
// echo fread($handle,filesize($filename));
echo fread($handle, 4);
echo fread($handle,3);
//ftell($handle) 指针所在位置
echo '当前指针位置为：'.ftell($handle);
//rewind($handle) 重置指针位置
rewind($handle);
echo '当前指针位置为：'.ftell($handle);
//fseek($handle) 移动指针
fseek($handle, 4);
echo '当前指针位置为：'.ftell($handle);
fseek($handle,0);
echo '当前指针位置为：'.ftell($handle);

//fclose($handle) 关闭文件句柄
fclose($handle);