<?php

$query2 = "SELECT count(*) from maklumatpelajar";
$result2 = mysqli_query($conn, $query2) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$row2 = mysqli_fetch_array($result2);
$total = $row2[0];


$query3 = "SELECT count(*) from maklumatpelajar WHERE kursus BETWEEN 5 AND 11";
$result3 = mysqli_query($conn, $query3) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$row3 = mysqli_fetch_array($result3);
$dlpv = $row3[0];

$query4 = "SELECT count(*) from maklumatpelajar WHERE kursus = '12'";
$result4 = mysqli_query($conn, $query4) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$row4 = mysqli_fetch_array($result4);
$vto = $row4[0];

$query5 = "SELECT count(*) from maklumatpelajar WHERE kursus BETWEEN 1 AND 4";
$result5 = mysqli_query($conn, $query5) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$row5 = mysqli_fetch_array($result5);
$skm3 = $row5[0];

?>