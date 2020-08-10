<?php

     //1. get the information of the whole file
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
        if($filesize < 100000){
            //uploading the file by giving it a unique name so that it cannot be replaced with another
            $fileNameNew =$firstname.uniqid('', true).'.'.$actualfileExt;
            //tell where we will upload the file
            $filedestination = '../uploads/'.$fileNameNew;
            //write a function to move the temporary location in to the actual location that we want it to be uploaded to.
        if(move_uploaded_file($filetempName, $filedestination)){
            $up = TRUE;
        }
        }else{
            $_SESSION['error']= "your CV size too big";
        }
        }else{
            $_SESSION['error']= "There was an error while sending your CV";
        }
    }else{
        $_SESSION['error']= "only CV of type .pdf, .txt, .docx are to be send, please try again";
    }

