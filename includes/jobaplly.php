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
    $Cv = $_FILES['CV'];

    $file = $_FILES['CV'];
    $fileName = $_FILES['CV']['name'];//getting the name of the file
    $filetempName = $_FILES['CV']['tmp_name'];//getting the tamporary location name
    $filesize = $_FILES['CV']['size'];//getting the actaul size of the file name
    $fileerror = $_FILES['CV']['error'];//checking if we will get an error while uploading the image
    $filetype = $_FILES['CV']['type'];//checking the type of file we should upload 
    //2. set the type of file to allow
    $fileExt = explode(".", $fileName);
    $actualfileExt = strtolower(end($fileExt));
    //3. the file extensions we want to apply
    $allowed = array('pdf', 'txt','docx');
    //4. check if the file is allowed to be uploaded in the website
    if(in_array($actualfileExt, $allowed)){
      //a. check if there was an error uploading
      if($fileerror === 0){
        //check size of the file to upload
        if($filesize < 10000000){
          //uploading the file by giving it a unique name so that it cannot be replaced with another
          $filedestination = '../uploads/'.$fileNameNew;
          //write a function to move the temporary location in to the actual location that we want it to be uploaded to.
          move_uploaded_file($filetempName, $filedestination);
          try{
            $sql = "INSERT INTO jobapplicantion (firstname,lastname,mobilenumber,qualification,experience,salaryexpected,coverletter,CV) VALUES (?,?,?,?,?,?,?,?)";
            $stmt =$conn->prepare($sql);
            $stmt -> execute([$firstname,$lastname,$phoneno,$qualifiction,$experience,$salary,$coverletter,$fileNameNew]);
            $_SESSION['success']= "Job application succesfully";
          }
          catch(PDOExcecution $e){
            $_SESSION['error']= $e->getMessage();
          }
        }else{
          $_SESSION['error'] = "filesizeistoobig";
        }
      }else{
        $_SESSION['error'] = "erroruploadingyourfile";
      }
    }else{
      $_SESSION['error'] = "cannotuploadthistypeoffile";
    }
    
  }
else{
  $_SESSION['error'] = "Click the apply button";
  
}
header("Location: ../jobapplication.php");
?>