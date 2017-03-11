<?php
header('content-type:text/html;charset=utf-8');
$filename="1.txt";
//将文件指针指向文件头 读写
// $handle=fopen($filename,'r+');
//fwrite($handle,$string) 向文件中写内容
// fwrite($handle, '1234');

//写入方式打开 如没有文件则创建 将文件指针指向文件头 会覆盖原有内容
// $handle=fopen($filename, 'w');
//读写方式打开 如没有文件则创建 将文件指针指向文件头 会覆盖原有内容
// $handle=fopen($filename, 'w+');
////写入方式打开 如没有文件则创建 将文件指针指向文件头 在末尾写人内容
$handle=fopen($filename, 'a');  //a+读写 同上
fwrite($handle, 'this is test');
rewind($handle);
echo fread($handle, filesize($filename));
fclose($handle);
