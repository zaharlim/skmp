<?php
session_start(); // Starting Session
include_once '../database.php';
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT * FROM admin  WHERE username='$username' AND password ='$password'";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
$count = mysqli_num_rows($result);
if ($count == 1){
        {   
             $_SESSION['username'] = $username;
             echo "<script>location.assign('../admin/administrator.php')</script> ";
        }
}else{
	 $_SESSION['error_message']="Username atau Password salah";
		header('Location: login.php');
}



?>
