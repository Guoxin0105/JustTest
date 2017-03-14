<?php
$filename='1.txt';
// file_get_contents($filename) 得到文件中所有内容
// $str=file_get_contents($filename);
// echo $str;

// file_put_contents($filename, $data) 向文件中写入内容 如果文件不存在 则创建
// $filename='2.txt';
// $data='good morning';
// $data=array('a','b','c','d');
// $string=file_put_contents($filename, $data);

// $info=file($filename);
// echo '<pre>';
// print_r($info);

//过滤空行
// $info=file($filename,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
// print_r( $info);
// echo'</pre>';

//输出文件中的内容
// readfile($filename);


$handle=fopen($filename,'rb');
//输入当前指针之后剩余的数据
fpassthru($handle);