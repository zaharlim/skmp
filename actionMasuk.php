<?php
ini_set("date.timezone", "Asia/Kuala_Lumpur");
include_once 'database.php';

$waktu = date('H:i:s');
$tarikh = date('Y-m-d');
$date_now = date('Y-m-d H:i:s');
$pid = $_POST['id'];
    if ($waktu < '23:00:00' AND $waktu > '08:00:00'){
	$query = "UPDATE `keluar` SET `masamasuk`=now() WHERE `pid`='$pid'";
	$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
	if (mysqli_query($conn, $query)) {
	echo '<script type="text/javascript">alert("Maklumat telah berjaya disimpan");</script>';
	header("Refresh: 0; url=index.php");
	}		
	}else{
	$query1 = "UPDATE `keluar` SET `masamasuk`=now() WHERE `pid`='$pid'";
	$result1 = mysqli_query($conn, $query1) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
	
	$query2 = "INSERT INTO `masuklewat` (`fid`,`masamasuk`) VALUES ('$pid',now())";
	$result2 = mysqli_query($conn, $query2) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
	echo '<script type="text/javascript">alert("Maklumat telah berjaya disimpan");</script>';
	header("Refresh: 0; url=index.php");
	}

?>