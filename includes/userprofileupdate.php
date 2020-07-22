<?php

if(isset($_POST['Update'])){
    require "dbconnection.php";
    $firstname = $_POST['fname']; 
    $lastname = $_POST['lname']; 
    $email = $_POST['email']; 
    $phone = $_POST['number'];

    session_start();
    $id = $_SESSION['id'];
$_SESSION['name'] = $firstname;
    if(empty($firstname) || empty($lastname) || empty($email) ||empty($phone)){
        header("Location: ../usersprofileupdate1?error=emptyfields");
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) &&  !preg_match("/^[a-zA-Z0-9]*$/",$firstname) && !preg_match("/^[a-zA-Z0-9]*$/",$lastname)  ){
         header("Location: ../usersprofileupdate1?error=details error");
         exit();
     }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){   
         header("Location: ../usersprofileupdate1?error=invalidemail&&fname=".$firstname."&lname=".$lastname);
         exit();
     }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$firstname)){
         header("Location: ../usersprofileupdate1?error=invalidfirstname&lname=".$lastname);
         exit();
     }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$lastname)){
         header("Location: ../usersprofileupdate1?error=invalidlastname&fname=".$firstname."&email=".$email);
         exit();
     }elseif(!preg_match("/^[0-9]*$/",$phone)){
         header("Location: ../usersprofileupdate1?error=invalid phone");
         exit();
     }else{
        $sql="UPDATE job_seeker_registration SET firstname=?, lastname=?, email=?, phonenumber=? WHERE id= ?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$firstname,$lastname,$email,$phone,$id]);
        if($stmt){
            header("location: ../homepage?updatedata=success");
            exit();
        }else{
            header("location: ../usersprofileupdate1?error=something is wrong");
            exit();
        }
     }
    
    



    }else{
        header("location: homepage");
        exit();
        }