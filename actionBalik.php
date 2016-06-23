<?php
include_once 'database.php';

$pid = $_POST['id'];
$query = "UPDATE `balik_kampung` SET `masakeluar`=now() WHERE `pid`='$pid'";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
if (mysqli_query($conn, $query)) {
echo '<script type="text/javascript">alert("Maklumat telah berjaya disimpan");</script>';
header("Refresh: 0; url=index.php");
}

?>