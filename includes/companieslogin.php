<?php

    if(isset($_POST['login'])){
        require "dbconnection.php";

        $username = $_POST['usernameemail'];
        $password = $_POST['Password1'];
        
        if(empty($username) || empty($password)){
            header("location: ../companylogin.php?error=emptyfields");
            exit();
        }else{
            $sql = "SELECT * FROM companyregistration  WHERE username=? OR email=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$username, $username]);
            $results = $stmt->rowcount();
            if($row = $stmt->fetch($results )){
                $pwdcheck = password_verify($password, $row['password']);
                if($pwdcheck == false){
                    header("location: ../companylogin.php?error=wrong-password");
                    exit();
                }elseif($pwdcheck == true){
                    session_start();           
                    $_SESSION['companyname']= $row['companyName'];
                    $_SESSION['email']= $row['email'];
                    $_SESSION['id']=$row['id'];
                    header("location: ../companysite.php?login=success");
                    exit();
                }else{
                    header("location: ../companylogin.php?error=wrong-password");
                    exit();
                }
            }else{
                header("location: ../companylogin.php?error=no-usser");
                exit();
            }


        }
    }else{
        header("location: ../companylogin.php");
        exit();
    }