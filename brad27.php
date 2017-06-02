<?php
//$file = file('brad.txt');
//    foreach ($file as $line){
//        echo "==>{$line}<br>";
//    }

//$file = file_get_contents('brad.txt');
//echo "==>{$file}";

$file = file('197.csv');

?>

<table border="1" width="100%">
    <tr>
<!--        <th>name</th>-->
<!--        <th>f1</th>-->
<!--        <th>f2</th>-->
<!--        <th>f3</th>-->
<!--        <th>f4</th>-->
    </tr>
    <?php
    foreach ($file as $line){
        $fileds = explode(',',$line);
        echo "<tr>";
        foreach ($fileds as $filedd){
            echo "<td>{$filedd}</td>";
        }
        echo "</tr>";
    }

    ?>
</table>
