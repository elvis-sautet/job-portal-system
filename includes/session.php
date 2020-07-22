<?php
session_start();
include 'includes/dbconnection.php';

if(!isset($_SESSION['id']) || trim($_SESSION['id']) == ''){
header('location: index');
}

$sql = "SELECT * FROM job_seeker_registration  WHERE  id = '".$_SESSION['id']."'";
$stmt = $conn->query($sql);
$user = $stmt->fetch(PDO::FETCH_ASSOC);


?>