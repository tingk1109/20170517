<?php

$account = $_GET["account"];
$passwd = $_GET["passwd"];
$birthday = $_GET["birthday"];
$aera = $_GET["aera"];
$gender = $_GET["gender"];
$like = $_GET["like"];


echo $account . '<br>';
echo $passwd . '<br>';
echo $birthday . '<br>';
echo $aera . '<br>';
echo $gender . '<br>';
foreach ($like as $v){
    echo "{$v}<br>";
}