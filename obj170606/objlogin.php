<?php

    include 'sqllight.php';
    session_start();

    if(isset($_POST['account'])){
        $pdo = new pdo($dsn, $user, $passwd, $opt);
        $account = $_POST['account'];
        $passwd = $_POST['passwd'];
        $sql = "select * from light where account=?";

        ($stmt = $pdo->prepare($sql))->execute([$account]);
        if ($stmt->rowCount()>0){
            $memberObj = $stmt->fetchObject();
            if (password_verify($passwd, $memberObj->passwd)){
                $_SESSION['member'] = $memberObj;
                header("Location: objview.php");
            }else{
                echo '請輸入正確的密碼';
            }
        }else {
            echo '此帳號尚未註冊';
        }
    }
?>

<form method="post">
    <table border="1" width="50%">
        <tr>
            <th>輸入帳號</th>
            <td><input type="text" name="account"></td>
        </tr>
        <tr>
            <th>輸入密碼</th>
            <td><input type="password" name="passwd"></td>
        </tr>
        <tr>
            <td colspan="3"><input type="button" onClick="self.location.href='objmain.php'" value="返回首頁">
            <input type="submit" value="登入">
                <input type="button" onClick="self.location.href='objaddr.php'" value="新增帳號"></td>
        </tr>
    </table>
</form>
