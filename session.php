<?php
session_start(); // Starting Session
include_once 'database.php';

$check = $_SESSION['nokp'];
$query = "SELECT * FROM keluar LEFT JOIN maklumatpelajar on keluar.nama = maklumatpelajar.id LEFT JOIN kursus on maklumatpelajar.kursus = kursus.fid WHERE nokp='$check' ORDER BY keluar.pid DESC LIMIT 1";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$row = mysqli_fetch_array($result);
$pid = $row['pid'];
$nama = $row['nama'];
$nokp = $row['nokp'];
$ndp = $row['ndp'];
$kursus = $row['kursus'];
$lokasi = $row['lokasi'];
$masakeluar = $row['masakeluar'];

if (!isset($check)){
echo "<script>window.open('index.php','_self')</script>";  
}

?>