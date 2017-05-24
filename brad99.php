<table width="100%" border="1">
    <?php
        $start = 2; $col = 4; $line = 2;
        for($row = 0 ; $row < $line ;$row++){
            echo '<tr>';
            for ($j = $start ; $j < $start + $col; $j++){

                echo "<td bgcolor='" .
            ((($j+$row)%2==0)?'yellow':'orange') . "'>";

                $newj = $j + $row * $col;
                for ($i = 1 ; $i <= 9 ;$i++) {
                    $r = $newj * $i;
                    echo "{$newj} * {$i} = {$r}<br>";
                }
                echo "</td>";
            }
            echo '</tr>';
        }
            ?>

</table>