<?php
$a = array(1,2,3);
$b[] = $a;
$b[] = array(2,4,5,7);
echo count($b[1]);