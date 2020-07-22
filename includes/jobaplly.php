<?php
session_start();
if(isset($_POST['apply-Job'])){
  require "dbconnection.php";

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $phoneno = $_POST['phonenumber'];
    $qualifiction = $_POST['Qualifications'];
    $experience = $_POST['experience'];
    $salary = $_POST['salary'];
    $coverletter = $_POST['coverletter'];
    $up = FALSE;
   include "fileupload.php";
  if($up){
      try{
        $sql = "INSERT INTO jobapplicantion (firstname,lastname,mobilenumber,qualification,experience,salaryexpected,coverletter,CV) VALUES (?,?,?,?,?,?,?,?)";
        $stmt =$conn->prepare($sql);
        $stmt -> execute([$firstname,$lastname,$phoneno,$qualifiction,$experience,$salary,$coverletter,$fileNameNew]);
        $_SESSION['success']= "Job application succesfully";
      }
      catch(PDOExcecution $e){
        $_SESSION['error']= $e->getMessage();
      }
  }
    
  }
else{
  $_SESSION['error'] = "Click the apply button";
  
}
header("Location: ../jobapplication");
?>
