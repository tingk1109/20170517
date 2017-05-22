<?php
if (isset($_GET["xx"])){
    $x = $_GET["xx"];
    $y = $_GET["yy"];
    $o =$_GET["op"];

    if ($o == "+") {
        $r = $x + $y;
    } elseif ($o == "-") {
        $r = $x - $y;
    } elseif ($o == "*") {
        $r = $x * $y;
    } elseif ($o == "/") {
        if ($x % $y == 0) {
            $r = $x / $y;
        } else {
            $a = floor($x / $y);
            $l = $x % $y;
            $r = "$a ...... $l";
        }
    }
}
?>
<form>
    <input type="text" name="xx" id="x" value="<?php echo $x ?>"/>
    <select name="op">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>


    <input type="text" name="yy" id="y" value="<?php echo $y ?>"/>
    <input type="submit" value="="/>

    <?php
    echo $r;
    ?>

</form>