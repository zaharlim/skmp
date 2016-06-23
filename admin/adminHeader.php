<?php
session_start(); // Starting Session
include_once '../database.php';
include_once 'session.php';
include_once 'dashboard.php';

if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $query = "SELECT * FROM maklumatpelajar WHERE id= '".$id."'";
  $result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
  $row = mysqli_fetch_array($result);
  $id = $row['id'];
  $nama = $row['nama'];
  $ndp = $row['ndp'];
  $nokp = $row['nokp'];
  $jantina = $row['jantina'];
  $kursus = $row['kursus'];
}  //update ends here

$query ="SELECT * FROM maklumatpelajar LEFT JOIN kursus on maklumatpelajar.kursus = kursus.fid";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);

$keluar ="SELECT * FROM keluar LEFT JOIN maklumatpelajar on keluar.nama = maklumatpelajar.id LEFT JOIN kursus on maklumatpelajar.kursus = kursus.fid";
$result2 = mysqli_query($conn, $keluar) or trigger_error("Query Failed! SQL: $query2 - Error: ". mysqli_error($conn), E_USER_ERROR);

$lewat = "SELECT * FROM masuklewat LEFT JOIN keluar on masuklewat.fid = keluar.pid LEFT JOIN maklumatpelajar on maklumatpelajar.id = keluar.nama LEFT JOIN kursus on maklumatpelajar.kursus = kursus.fid";
$result3 = mysqli_query($conn, $lewat) or trigger_error("Query Failed! SQL: $query2 - Error: ". mysqli_error($conn), E_USER_ERROR);

$kampung = "SELECT * FROM balik_kampung LEFT JOIN maklumatpelajar on balik_kampung.nama = maklumatpelajar.id LEFT JOIN kursus on maklumatpelajar.kursus = kursus.fid";
$result4 = mysqli_query($conn, $kampung) or trigger_error("Query Failed! SQL: $query2 - Error: ". mysqli_error($conn), E_USER_ERROR);

$pulang = "SELECT * FROM pulanglewat LEFT JOIN balik_kampung on pulanglewat.fid = balik_kampung.pid LEFT JOIN maklumatpelajar on maklumatpelajar.id = balik_kampung.nama LEFT JOIN kursus on maklumatpelajar.kursus = kursus.fid";
$result5 = mysqli_query($conn, $pulang) or trigger_error("Query Failed! SQL: $query2 - Error: ". mysqli_error($conn), E_USER_ERROR);


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
	<link href="../css/ionicons.css" rel="stylesheet" />
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   	
	<link href="../css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="../css/buttons.dataTables.min.css" rel="stylesheet">
	
</head>