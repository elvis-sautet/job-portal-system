<?php
include "includes/companysessions.php";
if(isset($_POST['upload'])){
   $id = $user['id'];   //1. get the information of the whole file
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];//getting the name of the file
  $filetempName = $_FILES['file']['tmp_name'];//getting the tamporary location name
  $filesize = $_FILES['file']['size'];//getting the actaul size of the file name
  $fileerror = $_FILES['file']['error'];//checking if we will get an error while uploading the image
  $filetype = $_FILES['file']['type'];//checking the type of file we should upload 
  //2. set the type of file to allow
  $fileExt = explode(".", $fileName);
  $actualfileExt = strtolower(end($fileExt));
  //3. the file extensions we want to apply
  $allowed = array('PNG', 'jpg','png');
  //4. check if the file is allowed to be uploaded in the website
  if(in_array($actualfileExt, $allowed)){
        //a. check if there was an error uploading
        if($fileerror === 0){
        //check size of the file to upload
        if($filesize < 1000000){
            //uploading the file by giving it a unique name so that it cannot be replaced with another
            $fileNameNew =uniqid('', true).'.'.$actualfileExt;
            //tell where we will upload the file
            $filedestination = 'profiles/'.$fileNameNew;
            //write a function to move the temporary location in to the actual location that we want it to be uploaded to.
        if(move_uploaded_file($filetempName, $filedestination)){
            $sql = "UPDATE companyregistration SET companyprofile = ? WHERE id = ?";
            $stmt =$conn->prepare($sql);
            $stmt -> execute([$fileNameNew, $id]);
            $_SESSION['pass'] = "profile uploaded sucessfully";
            header("Location: companyaccount");
        }
        }else{
            $_SESSION['cannot'] = "error=filesizetoobig";
            header("Location: companyaccount");
        }
        }else{
            $_SESSION['cannot'] = "Error=uploading your file";
            header("Location: companyaccount");
        }
    }else{
        $_SESSION['cannot']  = "Cannot upload this type of file allowed JPG & PNG";
        header("Location:  companyaccount");

    }
}else{
    $_SESSION['cannot'] = "Click the apply button";
    header("Location: companysite");

  }

  ?>