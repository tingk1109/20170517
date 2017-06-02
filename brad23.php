<?php
$fp = fopen('./brad.txt','r'); //r = 唯讀
while($line = fgets($fp)){
    $len = strlen($line);
    echo "{$len}:{$line}<br>";
}
fclose($fp);

//if($fp){
//    echo 'OK';
//}else{
//    echo 'XX';
//}
