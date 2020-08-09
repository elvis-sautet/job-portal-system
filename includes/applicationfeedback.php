<?php
include "dbconnection.php";
session_start();
$company=$_SESSION['id'];
$now = date("Y:m:d h:i:ia");
if(isset($_POST['send'])){
  require "dbconnection.php";
    $to = $_POST['sender'];
    $from = $_POST['bywho'];
    $Message = $_POST['message'];
    $jobmessageId= $_SESSION['jobidplaced'];
 echo $deletedjob=   $_SESSION['jobnameapplied'];
    $sql = "UPDATE jobapplicantion SET Message = ?,messagedate = ?  WHERE id = ?";
    $stmt =$conn-> prepare($sql);
    $stmt ->execute([$Message,$now,$jobmessageId]);
  
      $sqldeleted = "DELETE FROM jobpost WHERE jobname=? and company_id=?";
      $stmtdata=$conn->prepare($sqldeleted);
      $stmtdata->execute([$deletedjob,$company]);
  
    header("location: ../applications.php?messagesent");
}