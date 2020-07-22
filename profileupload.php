<?php
include "includes/dbconnection.php";
include "includes/session.php";


if(isset($_POST['upload'])){
    $id = $user['id'];
    //1. get the information of the whole file
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
    $allowed = array('jpg');
    //4. check if the file is allowed to be uploaded in the website
    if(in_array($actualfileExt, $allowed)){
      //a. check if there was an error uploading
      if($fileerror === 0){
        //check size of the file to upload
        if($filesize < 1000000){
          //uploading the file by giving it a unique name so that it cannot be replaced with another
          $fileNameNew ="profile".$id.'.'.$actualfileExt;
          //tell where we will upload the file 
          $filedestination = 'uploads/'.$fileNameNew;
          //write a function to move the temporary location in to the actual location that we want it to be uploaded to.
          move_uploaded_file($filetempName, $filedestination);
          $sql = "UPDATE profileimageupload SET status=0 WHERE userid = '$id'";
          $results=$conn->query($sql);

          header('location: careerprofile.php?uploadsuccess');
        }else{
            header('location: careerprofile.php?failed=file size too big');
        }
      }else{
        header('location:careerprofile.php?failed=there was an error uploading your file') ;
      }
    }else{
      header("location:careerprofile.php?failed you cannot upload this type of file") ;
    }
  }