<?php
include "dbconnection.php";
session_start();
date_default_timezone_set("Africa/Nairobi");
if(isset($_POST['rejectpost'])){
    $jobmessageId= $_SESSION['jobidplaced'];
    $timesendmmsg = date("Y:m:d h:i:s");
    $statusset = $_POST['messageofrejection'];
    $sqlrejecting = "UPDATE jobapplicantion SET Message = ?,messagedate = ?  WHERE id = ?";
    $stmtrejectng =$conn-> prepare($sqlrejecting);
    $stmtrejectng ->execute([$statusset,$timesendmmsg,$jobmessageId]);
    header("location: ../applications.php?Rejectedsend");
  
  }