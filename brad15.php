<?

include 'bradapi.php';

//
//$s = fx(3);
//echo $s;
//
//
//
//function fx($x){
//    $ret = 2 * $x +1 ;
//    return $ret;
//}

$myLottery = createLottery();
foreach($myLottery as $lottery){
    echo "{$lottery}<br>";
}
