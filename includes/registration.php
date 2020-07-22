<?php
  if(isset($_POST['register-submit'])){
    require 'dbconnection.php';

   $username = $_POST['username1']; 
   $firstname = $_POST['fname']; 
   $lastname = $_POST['lname']; 
   $email = $_POST['email']; 
   $password = $_POST['password1']; 
   $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    
   if(empty($username) || empty($firstname) || empty($lastname) || empty($email) || empty($password)  || empty($phone)  || empty($gender)){
       header("Location: ../signup.php?error=emptyfields&username1=".$username."&fname=".$firstname."&lname=".$lastname."&email=".$email);
       exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username) && !preg_match("/^[a-zA-Z0-9]*$/",$firstname) && !preg_match("/^[a-zA-Z0-9]*$/",$lastname)  ){
        header("Location: ../signup.php?error=details error");
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidemail&username1=".$username."&fname=".$firstname."&lname=".$lastname);
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../signup.php?error=invalidusername&fname=".$firstname."&lname=".$lastname);
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$firstname)){
        header("Location: ../signup.php?error=invalidfirstname&username1=".$username."&lname=".$lastname);
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$lastname)){
        header("Location: ../signup.php?error=invalidlastname&fname=".$firstname."&username1=".$username."&email=".$email);
        exit();
    }elseif(!preg_match("/^[0-9]*$/",$phone)){
        header("Location: ../signup.php?error=invalidlastname&fname=".$firstname."&username1=".$username."&email=".$email);
        exit();
    }else{
        $sql = "SELECT username FROM job_seeker_registration WHERE username=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);
        $checkresult=$stmt->rowcount();
        if($checkresult>0){
            header("Location: ../signup.php?error=usernametaken&email=".$email);
            exit(); 
        }else{
            $hashedpass= password_hash($password,PASSWORD_DEFAULT );
            $sql = "INSERT INTO job_seeker_registration (username,firstname,lastname,email,phonenumber,gender,password) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt ->execute([$username,$firstname,$lastname,$email,$phone,$gender,$hashedpass]);
            //inserting data in the other table
            header("Location: ../signup.php?signup=success");
            exit();
        }
        
    }
    $stmt->closeCursor();
    $conn=null;

  }else{
    header("Location: ../signup.php");
    exit();
  }