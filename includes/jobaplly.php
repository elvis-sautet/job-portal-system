<?php
session_start();
if(isset($_POST['apply-Job'])){
require_once "dbconnection.php";

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $phoneno = $_POST['phonenumber'];
    $qualifiction = $_POST['Qualifications'];
    $experience = $_POST['experience'];
    $salary = $_POST['salary'];
    $coverletter = $_POST['coverletter'];
    $Cv = $_FILES['CV']['name'];
    if(!empty($cv))
    {
        move_uploaded_file($_FILES['CV']['tmp_name'],'../uploads/'.$cv);
    }

    try{
      $sql = "INSERT INTO jobapplicantion (firstname,lastname,mobilenumber,qualification,experience,salaryexpected,coverletter,CV) VALUES (?,?,?,?,?,?,?,?)";
      $stmt =$conn->prepare($sql);
      $stmt -> execute([$firstname,$lastname,$phoneno,$qualifiction,$experience,$salary,$coverletter,$Cv]);
      $_SESSION['success']= "Job application succesfully";
    }
    catch(PDOExcecution $e){
      $_SESSION['error']= $e->getMessage();
    }
  }
else{
  $_SESSION['error'] = "Click the apply button";
  
}
header("Location: ../jobapplication.php");
?>
