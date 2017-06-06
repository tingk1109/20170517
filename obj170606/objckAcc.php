<?php

    include "sqllight.php";
    session_start();

    $pdo = new pdo($dsn, $user, $passwd, $opt);
    if (!isset($_REQUEST['account']))
        header("Location: objlogin.php");

    $account = $_REQUEST['account'];
    $passwd = $_REQUEST['passwd'];

    $sql = "SELECT * FROM light WHERE account = ?";
    $stmt = $pdo->prepare($sql);    // statement SQL
    $stmt->execute([$account]);

//    if ($stmt->rowCount()>0){
//        $memberObj = $stmt->fetchObject();
//        $dbPasswd = $memberObj->passwd;  //資料庫撈出密碼存在Obj裡
//        if (password_verify($passwd, $dbPasswd)){
//            // OK
//            $_SESSION['member'] = $memberObj;
//            header("Location: objview.php");
//        }else{
//            // passwd not match
//            header("Location: objlogin.php");
//        }
//    }else{
//        // account not exist
//        header("Location: objlogin.php");
//}