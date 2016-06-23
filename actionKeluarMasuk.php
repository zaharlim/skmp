<?php
session_start(); // Starting Session
include_once 'database.php';
// Define $username and $password
$nokp=$_POST['nokp'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// SQL query to fetch information of registerd users and finds user match.
switch($_POST['pilihan']){
case 'keluarbandar':
$query = "SELECT * FROM maklumatpelajar LEFT JOIN keluar on maklumatpelajar.id = keluar.nama WHERE nokp='$nokp' ORDER BY keluar.pid DESC LIMIT 1 ";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$count = mysqli_num_rows($result);
while($count ==1){
$row = mysqli_fetch_array($result);
$masakeluar = $row['masakeluar'];
$masamasuk = $row['masamasuk'];
$lokasi = $row['lokasi'];
	if(($lokasi !== NULL) && ($masakeluar == NULL) && ($masamasuk == NULL))	
{
$_SESSION['nokp'] = $nokp;
echo "<script>window.open('maklumatpelajarKeluar.php','_self')</script>";  
}
	elseif(($lokasi !== NULL) && ($masakeluar !== NULL) && ($masamasuk == NULL))
{
$_SESSION['nokp'] = $nokp;
echo "<script>window.open('maklumatpelajarMasuk.php','_self')</script>";  
}
	elseif(($lokasi !== NULL) && ($masakeluar !== NULL) && ($masamasuk !== NULL))
{
 $_SESSION['error_message']="Anda belum memohon";
 header('Location: index.php');
 }
 	elseif(($lokasi == NULL) && ($masakeluar == NULL) && ($masamasuk == NULL))
{
 $_SESSION['error_message']="Anda belum memohon";
 header('Location: index.php');
 }
 break;
}
if ($count ==0) 
{ 
 $_SESSION['error_message']="No IC Tiada Dalam Rekod";
 header('Location: index.php');
}

break;
case 'balikkampung':
$query = "SELECT * FROM maklumatpelajar LEFT JOIN balik_kampung on maklumatpelajar.id = balik_kampung.nama WHERE nokp='$nokp' ORDER BY balik_kampung.pid DESC LIMIT 1 ";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$count = mysqli_num_rows($result);
while($count ==1){
$row = mysqli_fetch_array($result);
$masakeluar = $row['masakeluar'];
$masamasuk = $row['masamasuk'];
$lokasi = $row['lokasi'];
	if(($lokasi !== NULL) && ($masakeluar == NULL) && ($masamasuk == NULL))	
{
$_SESSION['nokp'] = $nokp;
echo "<script>window.open('maklumatpelajarBalik.php','_self')</script>";  
}
	elseif(($lokasi !== NULL) && ($masakeluar !== NULL) && ($masamasuk == NULL))
{
$_SESSION['nokp'] = $nokp;
echo "<script>window.open('maklumatpelajarBalikMasuk.php','_self')</script>";  
}
	elseif(($lokasi !== NULL) && ($masakeluar !== NULL) && ($masamasuk !== NULL))
{
 $_SESSION['error_message']="Anda belum memohon";
 header('Location: index.php');
 }
 	elseif(($lokasi == NULL) && ($masakeluar == NULL) && ($masamasuk == NULL))
{
 $_SESSION['error_message']="Anda belum memohon";
 header('Location: index.php');
 }
 break;
}
if ($count ==0) 
{ 
 $_SESSION['error_message']="No IC Tiada Dalam Rekod";
 header('Location: index.php');
}
}


?>
