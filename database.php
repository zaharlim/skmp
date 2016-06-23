<?php
$DBServer = '10.37.12.20'; // e.g 'localhost' or '192.168.1.100'
$DBUser   = 'root';
$DBPass   = 'mysql@pem';
$DBName   = 'SKMP';

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
 
// check connection
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

?>