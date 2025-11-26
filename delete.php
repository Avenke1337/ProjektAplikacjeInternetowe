<?php 
include 'db_connection.php';


$id = $_GET['id'];

$sql = "DELETE FROM bilety WHERE id = '$id'";
mysqli_query($conn, $sql);
header("Location: index.php");


?>