<?php
if(isset($_GET['year'])){
    $y=$_GET['year'];
    if(($y % 4==0) && ($y % 100!=0) || ($y % 400==0))
        $result="西元 " . $y . " 年是閏年";
    else
        $result="西元 " . $y . " 年不是閏年";
}
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>閏年判斷</title>
</head>
<body>
<ul>
    <li>判斷某年是否為潤年？</li>
    <li>逢4的倍數閏.逢100的倍數不閏.逢400的倍數潤。</li>
</ul>
<form>
    <input type="text" name="year" id="year" value=""/>
    <input type="submit" value="判斷"/>
    <?php echo $result; ?>
</form>

</body>
</html>