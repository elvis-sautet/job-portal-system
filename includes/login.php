<?php

    if(isset($_POST['login-submit'])){
        require "dbconnection.php";

        $username = $_POST['usernameemail'];
        $password = $_POST['Password1'];
        
        if(empty($username) || empty($password)){
            header("location: ../login.php?error=emptyfields");
            exit();
        }else{
            $sql = "SELECT * FROM job_seeker_registration  WHERE username=? OR email=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$username, $username]);
            $results = $stmt->rowcount();
            if($row = $stmt->fetch($results )){
                $pwdcheck = password_verify($password, $row['password']);
                if($pwdcheck == false){
                    header("location: ../login.php?error=wrong-password");
                    exit();
                }elseif($pwdcheck == true){
                    session_start();
                    $_SESSION['id']=$row->id;
                    $_SESSION['Firstname']= $row['firstname'];
                    $_SESSION['UserName']= $row['username'];
                    $_SESSION['LastName']= $row['lastname'];
                    $_SESSION['email']= $row['email'];
                    header("location: ../homepage");
                    exit();


                }else{
                    header("location: ../login?error=wrong-password");
                    exit();
                }
            }else{
                header("location: ../login?error=no-usser");
                exit();
            }


        }
    }else{
        header("location: ../index");
        exit();
    }