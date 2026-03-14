<?php
    echo date('t');
    echo "<br>";
    echo date('d');
    echo "<br>";
    echo date('f');
    echo "<br>";
    echo date('m');
    echo "<br>";
    echo date('F');
    echo "<br>";
    echo date('M'); //short month
    echo "<br>";
    echo date('y');
    echo "<br>";
    echo date('D');
    echo "<br>";
    echo date('r'); //leap year return 0,1
    echo "<br>";
    echo date('d/m/y'); //full format
    echo "<br>";
    echo date('n'); //month numeric value
    echo "<br>";
    echo date('g');
    echo "<br>";
    echo date('a');
    echo "<br>";
    echo date('T');
    echo "<br>";
    date_default_timezone_set("Asia/Dhaka");
    echo date("Y-m-d h:i:s");
    echo date_default_timezone_get();
    echo "<br>";
    echo date_default_timezone_get() . '<br>' . date("h");
    echo "<br>";
    echo date_default_timezone_get() . 'today' . date("h");
    echo "<br>";
    $birthDate = new DateTime("2002-05-15");
    $today = new DateTime("2026-03-11");

    $diff = $birthDate->diff($today);

    echo "Years: " . $diff->y . "<br>";
    echo "Months: " . $diff->m . "<br>";
    echo "Days: " . $diff->d . "<br>";
    $birthDate = new DateTime("2002-05-15");
    $today = new DateTime("2026-03-11");

    $diff = $birthDate->diff($today);

    $totalDays = $diff->days;
    $weeks = floor($totalDays / 7);
    $hours = $totalDays * 24;

    echo "Total Days: $totalDays <br>";
    echo "Weeks: $weeks <br>";
    echo "Hours: $hours";
    
?>