<?php

if(isset($_POST['Update'])){
    require "dbconnection.php";
    $firstname = $_POST['fname']; 
    $lastname = $_POST['lname']; 
    $email = $_POST['email']; 
    $phone = $_POST['number'];

    session_start();
    $id = $_SESSION['id'];

    if(empty($firstname) || empty($lastname) || empty($email) ||empty($phone)){
        header("Location: ../usersprofileupdate1.php?error=emptyfields");
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) &&  !preg_match("/^[a-zA-Z0-9]*$/",$firstname) && !preg_match("/^[a-zA-Z0-9]*$/",$lastname)  ){
         header("Location: ../usersprofileupdate1.php?error=details error");
         exit();
     }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){   
         header("Location: ../usersprofileupdate1.php?error=invalidemail&&fname=".$firstname."&lname=".$lastname);
         exit();
     }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$firstname)){
         header("Location: ../usersprofileupdate1.php?error=invalidfirstname&lname=".$lastname);
         exit();
     }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$lastname)){
         header("Location: ../usersprofileupdate1.php?error=invalidlastname&fname=".$firstname."&email=".$email);
         exit();
     }elseif(!preg_match("/^[0-9]*$/",$phone)){
         header("Location: ../usersprofileupdate1.php?error=invalid phone");
         exit();
     }else{
        $sql="UPDATE job_seeker_registration SET firstname=?, lastname=?, email=?, phonenumber=? WHERE id= ?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$firstname,$lastname,$email,$phone,$id]);
        if($stmt){
            header("location: ../homepage.php?updatedata=success");
            exit();
        }else{
            header("location: ../usersprofileupdate1.php?error=something is wrong");
            exit();
        }
     }
    
    



    }else{
        header("location: homepage.php");
        exit();
        }