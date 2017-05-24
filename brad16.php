<form action="brad17.php" method="get">

    Name:<input type="text" name="account" /><br>
    Password:<input type="password" name="passwd" /><br>
    Birthday:<input type="date" name="birthday" /><br>

    <select name="aera">
        <option value="401">中區</option>
        <option value="402">西屯區</option>
        <option value="403" selected>南屯區</option>
        <option value="404">北區</option>
    </select><br>

    <input type="radio" name="gender" value="0" checked>Woman
    <input type="radio" name="gender" value="1">Man<br>

    <input type="checkbox" name="like[]" value="1">LOL
    <input type="checkbox" name="like[]" value="2">爐石
    <input type="checkbox" name="like[]" value="3">英霸<br>
    <input type="checkbox" name="like[]" value="4">吃雞
    <input type="checkbox" name="like[]" value="5">OW
    <input type="checkbox" name="like[]" value="6">暗影詩章<br>

    <textarea name="memo"></textarea>

    <input type="file" name="onload" />

    <input type="submit" value="送出">

</form>