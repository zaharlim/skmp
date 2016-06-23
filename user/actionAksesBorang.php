<?php
session_start(); // Starting Session
include_once '../database.php';
// Define $username and $password
$nondp=$_POST['nondp'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT * FROM maklumatpelajar WHERE ndp = '$nondp' ";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$count = mysqli_num_rows($result);
	if($count == 1)
		
{
$_SESSION['ndp'] = $nondp;
echo "<script>window.open('borangkeluar.php','_self')</script>";  
}
else{
	 $_SESSION['error_message']="No NDP Tiada Dalam Rekod";
	header('Location: AksesBorang.php');
}



?>
