<?php
include "dbconnection.php";
session_start();
$company=$_SESSION['id'];
if(isset($_POST['send'])){
  require "dbconnection.php";
    $to = $_POST['sender'];
    $from = $_POST['bywho'];
    $Message = $_POST['message'];
    $jobmessageId= $_SESSION['jobidplaced'];
 echo $deletedjob=   $_SESSION['jobnameapplied'];
    $sql = "UPDATE jobapplicantion SET Message = ? WHERE id = ?";;
    $stmt =$conn-> prepare($sql);
    $stmt ->execute([$Message,$jobmessageId]);
  
      $sqldeleted = "DELETE FROM jobpost WHERE jobname=? and company_id=?";
      $stmtdata=$conn->prepare($sqldeleted);
      $stmtdata->execute([$deletedjob,$company]);
  
    header("location: ../applications.php?messagesent");
}