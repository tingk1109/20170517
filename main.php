<?php
//include 'sql.php';
//session_start();
//if (!isset($_SESSION['member'])) header("Location: login.php");
//$memberObj = $_SESSION['member'];
//?>
<!--Hello, --><?php //echo $memberObj->realname; ?>
<!--<hr>-->
<!--<a href="logout.php">Logout</a>-->

<?php
include 'sql2.php';
session_start();
if (!isset($_SESSION['member'])) header("Location: login.php");
$memberObj = $_SESSION['member'];
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "select * from trip where city like '南投%' order by city desc";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>
Hello, <?php echo $memberObj->realname; ?>
<hr>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>City</th>
        <th>Town</th>
        <th>Memo</th>
    </tr>
    <?php
    while ($row = $stmt->fetchObject()){
        echo '<tr>';
        echo "<td>{$row->tid}</td>";
        echo "<td>{$row->tname}</td>";
        echo "<td>{$row->city}</td>";
        echo "<td>{$row->town}</td>";
        echo "<td>{$row->memo}</td>";
        echo '</tr>';
    }
    ?>
</table>
<hr>
<a href="logout.php">Logout</a>