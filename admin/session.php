<?php

$check = $_SESSION['username'];
$query = "SELECT * FROM admin WHERE username = '$check'";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$row = mysqli_fetch_array($result);
$nama = $row['nama'];

if (!isset($check)){
echo "<script>window.open('../user/login.php','_self')</script>";  
}

?>