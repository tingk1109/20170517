<?php
$fp = fopen('./iii.txt','w+');
fwrite($fp,'Hello, World');
fclose($fp);