<?php
$filename='1.txt';
$handle=fopen($filename, 'rb');
// $info=fscanf($handle, "%s%s%d");
// print_r($info);
while (($info=fscanf($handle, "%s%s%d"))!==false){
    echo '品牌:'.$info[0].'<br/>';
    echo '邮箱:'.$info[1].'<br/>';
    echo '密码:'.$info[2].'<br/>';
    echo '<hr/>';
}
fclose($handle);