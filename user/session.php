<?php
session_start(); // Starting Session
include_once '../database.php';

$check = $_SESSION['ndp'];
$query = "SELECT * FROM maklumatpelajar LEFT JOIN kursus on maklumatpelajar.kursus = kursus.fid WHERE ndp='$check'";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$row = mysqli_fetch_array($result);
$id = $row['id'];
$nama = $row['nama'];
$nokp = $row['nokp'];
$ndp = $row['ndp'];
$kursus = $row['kursus'];
$pengajar = $row['namapengajar'];

if (!isset($check)){
echo "<script>window.open('index.php','_self')</script>";  
}

?>