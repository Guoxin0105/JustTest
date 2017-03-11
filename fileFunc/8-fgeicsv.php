<?php
$filename='test.csv';
$handle=fopen($filename,'r+');
//读取文件中的一行作为csv的解析
// $row=fgetcsv($handle);
// print_r($row);

// $str=fread($handle, filesize($filename));
// $arr=explode(',',$str);
// print_r($arr);

// while(($row=fgetcsv($handle))!==false){
//     print_r($row);
//     echo '<hr/>';
// }

while (($row=fgetcsv($handle,0,'-'))!==false) {
     print_r($row);
     echo '<hr/>';
}