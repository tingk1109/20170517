<?php

//    $conn = @mysqli_connect('127.0.0.1',
//            'root','root',
//            'iii') or die('Server Busy');
//    if ($conn) echo 'OK';
      $db = @new mysqli('127.0.0.1',
          'root','root','iii');

//      $sql='insert into member(account,passwd,realname) values ("brad","123456","Brad")';

      $sql='select * from member';

      $result = $db -> query($sql);
      $row = $result->fetch_object();
      echo "{$row->id}:{$row->account}:{$row->passwd}<br>";