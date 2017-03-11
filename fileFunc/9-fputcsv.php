<?php
$data=array(
    array('a','b','c','d'),
    array('你','好','明','天')
);
$handle=fopen('test.csv', 'wb+');
// foreach ($data as $val){
//     fputcsv($handle, $val);
// }
// fclose($handle);

// foreach ($data as $val){
//     fwrite($handle, join(',',$val)."\n");
// }
// fclose($handle);

foreach ($data as $val){
    fputcsv($handle, $val,'-');
}
fclose($handle);