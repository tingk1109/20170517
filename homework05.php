<?php
// 可動態調整最大數($maxNumber)和行數($col)
$maxNum = 100;
$col = 10;
echo '<table border="1" width="100%">';
for ($i=1; $i<=$maxNum; $i++) {
    if ($i % $col == 1) echo '<tr>';
    if (isPrimeNumber($i)) {
        echo "<td bgcolor='yellow'>{$i}</td>";
    } else {
        echo "<td>{$i}</td>";
    }
    if ($i % $col == 0) echo '</tr>';
}
echo '</table>';
/*----------------------------------------------------------------------------*/
/* 程式名稱: isPrimeNumber()                                                   */
/* 程式說明: 判斷是否為質數                                                      */
/* 傳回參數: true、false                                                       */
/* 使用說明:                                                                   */
/*----------------------------------------------------------------------------*/
function isPrimeNumber($number) {
    // <1非質數
    if ($number <= 1) {
        return false;
    }
    // 排除2、3的倍數，可少4/6的數字判斷
    if ($number > 2 && $number%2==0) {
        return false;
    }
    if ($number > 3 && $number%3==0) {
        return false;
    }
    $result = true;
    // TODO 只要除質數即可(未完成...)
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $result = false;
            break;
        }
    }
    return $result;
}

//
//echo "1-100判斷質數選到質數背景黃色<br/>";
//
//$number = 0;
//define("MAX","100");
//define("MIN", "1");
//
//do{
//    if ( $number > MIN ){
//        switch ($number){
//            case 2:
//            case 3:
//            case 5:
//            case 7:
//                echo $number." is prime <br/>";
//                break;
//            default:
//                if( $number % 2 !=0 ){
//                    if ($number % 3 !=0){
//                        if ($number % 5 !=0){
//                            if ($number % 7 !=0){
//                                echo $number." is prime<br/>";
//                            }
//                        }
//                    }
//                }
//                break;
//        }
//    }
//    $number ++;
//}while( $number < MAX);
//
////echo "Sum of the primes =".$sum;
//
//
////1-100判斷質數選到質數背景黃色
////
//////for($i = 1 ; $i <= 100 ; $i++){
//////
//////}
////
//////篩選法求質數小程式：
//////以篩選法求質數
//////設定質數範圍
////$n=100;
////
////$prime=array();
////$sieve=array_fill(2,$n-1,1);
////
//////需驗證次數
////$verify = (int) sqrt((double) $n);
////
////for ($i = 2; $i <= $verify;$i++) {
////    if ($sieve[$i] == 0) continue;
////    $k = $i + $i;
////    //每個質數的所有倍數均非質數
////    while ($k <= $n) {
////        $sieve[$k] = 0;
////        $k += $i;
////    }
////}
////
////for($i=2;$i<$n;$i++)
////    if($sieve[$i]) $prime[]=$i;
////
////echo join(', ',$prime);
////
//
//
//?>
<!---->
<!---->
<!--<table width="100%" border="1">-->
<!--    --><?php
//    $a = 1 ; $line = 10;
//    for($k = 1 ; $k <= $line ; $k++){
//        echo '<tr>';
//        for ($j= 1 ; $j <= 10 ; $j++){
//            {
//                echo "<td bgcolor='" .
//                    ($number?'yellow':'orange') . "'>";
//
//                echo "{$a}";
//                $a++;
//            }
//            echo "</td>";
//        }
//        echo '</tr>';
//    }
//    ?>
<!---->
<!--</table>-->
