<?php
include_once '../database.php';

$uploadDir = '../uploaded_files/'; //Image Upload Folder
if (isset($_POST['submit']))
{
	$nama = $_POST['nama'];
	$nokp = $_POST['nokp'];
	$ndp = $_POST['ndp'];
	$jantina = $_POST['jantina'];
	$kursus = $_POST['kursus'];
	$fileName = $_FILES['image1']['name'];
	$tmpName  = $_FILES['image1']['tmp_name'];
	$fileSize = $_FILES['image1']['size'];
	$fileType = $_FILES['image1']['type'];
	$filePath = $uploadDir . $fileName;
	$result = move_uploaded_file($tmpName, $filePath);
		
		if (!$result) 
		{
		}
		if(!get_magic_quotes_gpc())
		{
				$fileName = addslashes($fileName);
				$filePath = addslashes($filePath);
		}
$sql = "INSERT INTO `maklumatpelajar` (`id`, `nama`, `nokp`, `ndp`, `jantina`, `kursus`,`img_path`) VALUES ('', '$nama', '$nokp', '$ndp', '$jantina', '$kursus', '$fileName')";
if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">alert("Maklumat telah berjaya didaftarkan");</script>';
header("Refresh: 0; url=tambahpelajar.php");
}
		else {
		echo "Maklumat tidak berjaya didaftar: " . mysqli_error($conn);
}
}
?>