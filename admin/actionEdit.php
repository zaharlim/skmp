<?php
session_start();
include_once '../database.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$nokp = $_POST['nokp'];
$ndp=$_POST['ndp'];
$jantina = $_POST['jantina'];
$kursus = $_POST['kursus'];

$query = "UPDATE maklumatpelajar SET nama = '$nama', nokp = '$nokp', ndp = '$ndp', jantina = '$jantina', kursus = '$kursus' WHERE id = '$id'";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
echo '<script type="text/javascript">alert("Maklumat telah berjaya dikemaskini");</script>';
header("Refresh: 0; url=senaraipelajar.php");
?>
