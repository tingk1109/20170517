<?php
$db = @new mysqli('127.0.0.1','root','root','light');

if (isset($_GET['delid'])){
    $delid = $_GET['delid'];
    $sql = "delete from light where id={$delid}";
    $db->query($sql);
}

$sql = 'select * from light';
$rs = $db->query($sql);
?>

<meta charset="utf-8" />
<a href="objaddr.php">新增帳號</a>
<a href="objlogout.php">登出</a>
<hr>
<table border="1" width="100%">
    <tr>
        <th>Id</th>
        <th>帳號</th>
        <th>申請人姓名</th>
        <th>生日</th>
        <th>電話</th>
        <th>地址</th>
    </tr>
    <?php
        while ($row = $rs->fetch_object()){
            echo "<tr>";
            echo "<td>{$row->id}</td>";
            echo "<td>{$row->account}</td>";
            echo "<td>{$row->realname}</td>";
            echo "<td>{$row->birthday}</td>";
            echo "<td>{$row->tel}</td>";
            echo "<td>{$row->addr}</td>";
            echo "</tr>";
        }
    ?>

</table>