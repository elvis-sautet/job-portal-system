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
<<<<<<< HEAD
    $Cv = $_FILES['CV'];

    // $file = $_FILES['CV'];
    // $fileName = $_FILES['CV']['name'];//getting the name of the file
    // $filetempName = $_FILES['CV']['tmp_name'];//getting the tamporary location name
    // $filesize = $_FILES['CV']['size'];//getting the actaul size of the file name
    // $fileerror = $_FILES['CV']['error'];//checking if we will get an error while uploading the image
    // $filetype = $_FILES['CV']['type'];//checking the type of file we should upload 
    // //2. set the type of file to allow
    // $fileExt = explode(".", $fileName);
    // $actualfileExt = strtolower(end($fileExt));
    // //3. the file extensions we want to apply
    // $allowed = array('pdf', 'txt','docx');
    // //4. check if the file is allowed to be uploaded in the website
    // if(in_array($actualfileExt, $allowed)){
    //   //a. check if there was an error uploading
    //   if($fileerror === 0){
    //     //check size of the file to upload
    //     if($filesize < 10000000){
    //       //uploading the file by giving it a unique name so that it cannot be replaced with another
    //       $fileNameNew =$firstname.uniqid('', true).'.'.$actualfileExt;
    //       //tell where we will upload the file
    //       $filedestination = '../uploads/'.$fileNameNew;
    //       //write a function to move the temporary location in to the actual location that we want it to be uploaded to.
    //       move_uploaded_file($filetempName, $filedestination);
         
    //     }else{
    //       header("Location: ../jobapplication.php?error=filesizeistoobig");
    //       exit();
    //     }
    //   }else{
    //       header("Location: ../jobapplication.php?error=erroruploadingyourfile");
    //       exit();
    //   }
    // }else{
    //   header("Location: ../jobapplication.php?error=cannotuploadthistypeoffile");
    //   exit();
    // } 
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
    if(empty($salary)  || empty($coverletter) || empty($qualifiction ) || empty($experience ) || empty($firstname)  || empty($lastname)||empty($phoneno)   ){
      header("Location: ../jobapplication.php?error=someemptyfields");
      exit();
    }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$firstname) && !preg_match("/^[a-zA-Z0-9]*$/",$lastname) && !preg_match("/^[0-9]*$/",$phoneno) && !preg_match("/^[0-9]*$/",$salary)  && !preg_match("/^[a-zA-Z0-9]*$/",$coverletter)){
          header("Location: ../jobapplication.php?error=details error");
          exit();
    }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$firstname)){
          header("Location: ../jobapplication.php?=invalidfirstname");
          exit();
    }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$lastname)){
          header("Location: ../jobapplication.php?error=invalidlastname");
          exit();
    }elseif(!preg_match("/^[0-9]*$/",$phoneno)){
          header("Location: ../jobapplication.php?error=invalidphonenumber");
          exit();
    }elseif(!preg_match("/^[0-9]*$/",$salary)){
          header("Location: ../jobapplication.php?error=invalidSalary");
          exit();
    }elseif(in_array($actualfileExt, $allowed)){
      if($filesize < 10000000){
        //uploading the file by giving it a unique name so that it cannot be replaced with another
          $fileNameNew =$firstname.uniqid('', true).'.'.$actualfileExt;
          //tell where we will upload the file
          $filedestination = '../uploads/'.$fileNameNew;
          //write a function to move the temporary location in to the actual location that we want it to be uploaded to.
          move_uploaded_file($filetempName, $filedestination);
          $sql = "INSERT INTO jobapplicantion (firstname,lastname,mobilenumber,qualification,experience,salaryexpected,coverletter,CV)
            VALUES (?,?,?,?,?,?,?,?)";
            $stmt =$conn->prepare($sql);
            $stmt -> execute([$firstname,$lastname,$phoneno,$qualifiction,$experience,$salary,$coverletter,$fileNameNew]);
            header("Location: ../jobapplication.php?apllication=success");
            exit();
        }else{
          header("Location: ../jobapplication.php?error=filesizeistoobig");
          exit();
        }
      header("Location: ../jobapplication.php?error=cannotuploadthistypeoffile");
      }
      
    else{
            // $sql = "INSERT INTO jobapplicantion (firstname,lastname,mobilenumber,qualification,experience,salaryexpected,coverletter,CV)
            // VALUES (?,?,?,?,?,?,?,?)";
            // $stmt =$conn->prepare($sql);
            // $stmt -> execute([$firstname,$lastname,$phoneno,$qualifiction,$experience,$salary,$coverletter,$fileNameNew]);
            // header("Location: ../jobapplication.php?apllication=success");
            // exit();
    }   
}else{
  echo "error occured";
}
=======
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
>>>>>>> a1aabfa96abde75462ae2b215f1f9b6692390f9e
