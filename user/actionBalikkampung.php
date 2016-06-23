<?php
session_start();
include '../database.php';

$nama = $_POST['namabalik'];
$lokasi = $_POST['lokasibalik'];
$tarikh = $_POST['tarikhbalik'];
$query = "INSERT INTO balik_kampung (nama,lokasi,masakeluar,masamasuk,tarikhbalik) SELECT maklumatpelajar.id,'$lokasi',NULL,NULL,'$tarikh' FROM maklumatpelajar WHERE nama='$nama'";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
if ($result) {
echo '<script type="text/javascript">alert("Maklumat telah berjaya disimpan");</script>';
session_destroy();
header("Refresh: 0; url=index.php");
}

?>