<?php

$a = array(1,2,3,4,5);
foreach ($a as $value){
    echo $value . '<br>';
}
echo '<hr>';

for ($i=0; $i<count($a); $i++){
    echo $i . $a[$i] . '<br>';
}