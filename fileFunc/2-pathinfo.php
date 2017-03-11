<?php
$filename='test.php';
//fileinfo($filename) 取得文件的信息
echo '<pre>';
$fileInfo=pathinfo($filename);
print_r($fileInfo);
/**
 * Array
(
    [dirname] => .
    [basename] => test.php
    [extension] => php
    [filename] => test
)
 */
echo '</pre>';
echo '<br/>';
echo '文件扩展名为：'.$fileInfo['extension'].'<br/>';
echo pathinfo($filename,PATHINFO_BASENAME).'<br/>';
echo pathinfo($filename,PATHINFO_DIRNAME).'<br/>';
echo pathinfo($filename,PATHINFO_EXTENSION).'<br/>';
echo pathinfo($filename,PATHINFO_FILENAME).'<br/>';
echo '文件路径部分：'.dirname($filename).'<br/>';
echo '文件名部分'.basename($filename).'<br/>';
//realpath($filename) 返回规范化的绝对路径
echo realpath($filename).'<br/>';

















