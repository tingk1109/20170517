<?php
  $poker=array();
  $n=52;
  for($i=0;$i<$n;$i++){
      $poker[]=$i;
      echo "{$poker[$i]}\r";
  }
   echo "<hr>";
  for($i=$n-1;$i>=0;$i--){
      $random=rand(0,$i);
      $temp=$poker[$random];
      $poker[$random]=$poker[$i];
      $poker[$i]=$temp;
  }
  for($i=0;$i<$n;$i++)
      echo "{$poker[$i]}\r";
