<?php

    include 'sql.php';
    session_start();

    if(isset($_POST['account'])){
        $pdo = new pdo($dsn, $user, $passwd, $opt);
        $account = $_POST['account'];
        $passwd = $_POST['passwd'];
        $sql = "select * from member where account=?";

        ($stmt = $pdo->prepare($sql))->execute([$account]);
        if ($stmt->rowCount()>0){
            $memberObj = $stmt->fetchObject();
            if (password_verify($passwd, $memberObj->passwd)){
                $_SESSION['member'] = $memberObj;
                header("Location: main.php");
            }else{
                echo 'X1';
            }
        }else {
            echo 'X0';
        }
    }
?>

<form method="post">
    <table>
        <tr>
            <th>Account</th>
            <td><input type="text" name="account"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="passwd"></td>
        </tr>
        <tr>
            <td><input type="submit" value="login"></td>
        </tr>
    </table>
</form>
