<?php
session_start();
include_once '../database.php';

$id = $_GET['id'];
$query = "DELETE FROM maklumatpelajar WHERE id = '$id'";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
header("Refresh: 0; url=senaraipelajar.php");
?>