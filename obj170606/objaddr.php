<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

include 'sqllight.php';
$pdo = new pdo($dsn, $user, $passwd, $opt);

if(isset($_REQUEST['account'])){
    $account = $_REQUEST['account'];
    $passwd = password_hash($_REQUEST['passwd'], PASSWORD_DEFAULT);
    $realname = $_REQUEST['realname'];
    $birthday = $_REQUEST['birthday'];
    $tel = $_REQUEST['tel'];
    $addr = $_REQUEST['addr'];
    $sql = "INSERT INTO light (account,passwd,realname,birthday,tel,addr)" .
        "VALUES (?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$account,$passwd,$realname,$birthday,$tel,$addr]);
    header("Location: objmain.php");
}

?>

<form>
    <table border="1" width="50%">
        <tr>
            <th>帳號</th>
            <td><input type="text" name="account"></td>
        </tr>
        <tr>
            <th>密碼</th>
            <td><input type="password" name="passwd"></td>
        </tr>
        <tr>
            <th>申請人姓名</th>
            <td><input type="text" name="realname"></td>
        </tr>
        <tr>
            <th>生日</th>
            <td><input type="date" name="birthday"></td>
        </tr>
        <tr>
            <th>電話</th>
            <td><input type="text" name="tel"></td>
        </tr>
        <tr>
            <th>地址</th>
            <td><input type="text" name="addr"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" onClick="self.location.href='objmain.php'" value="返回首頁">
                <input type="submit" value="新增資料"></td>
        </tr>
    </table>
</form>