<?php
$filename="1.txt";
$handle=fopen($filename, 'rb+');
// ftruncate($handle,$size) 将文件截至指定长度
// ftruncate($handle, 4);
// feof($handle) 判断指针是否到了末尾
while (!feof($handle)){
//     fgetc($handle)一个字符一个字符的读
//     echo fgetc($handle);
//         fgets($handle)一行行的读
//         echo fgets($handle);
//         echo '<br/>';
//         fgetss($handle) 一行行的读取 过滤HTML标记
        echo fgetss($handle);
        echo '<br/>';
}
fclose($handle);