<?php
//萬年曆

//$_GET['year'] = 2017;
function isLeapYear($year) {
    $result = false;
    if ($year < 1752) {
        if ($year % 4 == 0) {
            $result = true;
        }
    } else {
        if ($year % 4   == 0 && $year % 100  <> 0 ||
            $year % 400 == 0 && $year % 4000 <> 0) {
            $result = true;
        }
    }
    return $result;
}
function getDaysOfMonth($year, $month) {
    if ($month == 2) {
        if (isLeapYear($year)) {
            return 29;
        } else {
            return 28;
        }
    } else if ($month == 4 or $month == 6 or $month == 9 or $month == 11) {
        return 30;
    } else {
        return 31;
    }
    return 0;
}
function getMonthDays($year, $month) {
    $isLeapYear = isLeapYear($year, $month);
    $Day = $isLeapYear?-1:0;
    switch($month) {
        case 1:
            return $Day;
        case 2:
            return 3 + $Day;
        case 3:
            return $isLeapYear?4+$Day:3+$Day;
        case 4:
            return $isLeapYear?$Day:6+$Day;
        case 5:
            return $isLeapYear?2+$Day:1+$Day;
        case 6:
            return $isLeapYear?5+$Day:4+$Day;
        case 7:
            return $isLeapYear?$Day:6+$Day;
        case 8:
            return $isLeapYear?3+$Day:2+$Day;
        case 9:
            return $isLeapYear?6+$Day:5+$Day;
        case 10:
            return $isLeapYear?1+$Day:$Day;
        case 11:
            return $isLeapYear?4+$Day:3+$Day;
        case 12:
            return $isLeapYear?6+$Day:5+$Day;
    }
    return 0;
}
function getWeekOfMonth($year, $month) {
    return ($year + intval($year/4) + intval($year/400) - intval($year/100) + getMonthDays($year, $month)) % 7;
}
function decodeEnglishOfMonth($month) {
    switch($month) {
        case 1: return 'January';
        case 2: return 'February';
        case 3: return 'March';
        case 4: return 'April';
        case 5: return 'May';
        case 6: return 'June';
        case 7: return 'July';
        case 8: return 'August';
        case 9: return 'September';
        case 10: return 'October';
        case 11: return 'November';
        case 12: return 'December';
    }
}
if (isset($_GET['year'])) {
    $year = $_GET['year'];
//    if (isset($_GET['btnPrevious'])) {
//        $year--;
//    }
//    if (isset($_GET['btnNext'])) {
//        $year++;
//    }
//    for ($i=1; $i<=12; $i++) {
//        $days = getDaysOfMonth($year, $i);
//        echo "Days: $i: $days <br>";
//        $week = getWeekOfMonth($year, $i);
//        echo "Week: $i: $week <br>";
//    }
}
?>
<html>
<head>
    <meta charset="ftf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Calendar</title>
</head>
<body>
<form>
    <div class="row">
        <div class="col-sm-4">Calendar</div>
        <div class="col-sm-8">
            <!--            <input type="submit" name="btnPrevious" value="<Previous" />-->
            <input type="text" name = "year" value="<?php echo $year ?>" placeholder="Please input a year:" required />
            <!--            <input type="submit" name="btnNext" value="Next>" />-->
        </div>
    </div>
    <?php
    if (isset($_GET['year'])) {
        for ($month = 1; $month <= 12; $month++) {
            $day = 1;
            $maxDay = getDaysOfMonth($year, $month);
            $firstWeek = getWeekOfMonth($year, $month);
            if ($month % 3 == 1)  echo "<div class='row'>\n";
            echo "<div class='col-sm-4'>\n";
            echo "<table class='table table-striped''>\n";
            echo '<tr><th>' . decodeEnglishOfMonth($month) . "</th></tr>\n";
            echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>\n";
            for ($week = 0; $week <= 41; $week++) {
                if ($week % 7 == 0) echo '<tr>';
                if ($week == $firstWeek || $day > 1 && $day <= $maxDay) {
                    echo "<td>$day</td>";
                    $day++;
                } else {
                    echo "<td></td>";
                }
                if ($week % 7 == 6) echo "</tr>\n";
            }
            echo "</table>\n";
            echo "</div>\n";
            if ($month % 3 == 0)  echo "</div>\n";
        }
    }
    ?>
</form>
</body>
</html>
