<?php
session_start();
include_once '../database.php';

$id = $_GET['pid'];
$query = "DELETE FROM balik_kampung WHERE pid = '$id'";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
header("Refresh: 0; url=senaraipelajarbalik.php");
?>