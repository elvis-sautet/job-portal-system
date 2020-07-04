<?php

$servername = 'localhost';
$username = 'root';
$password = '';
try {
    $conn = new PDO("mysql:host=$servername;dbname=placement portal", $username, $password);
    // set the PDO error mode to exception
    $conn ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);//set this to fetch mode object since i will be using objects sometimes while fetching
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
