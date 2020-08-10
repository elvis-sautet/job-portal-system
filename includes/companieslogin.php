<?php

    if(isset($_POST['login'])){
        require "dbconnection.php";

        $username = $_POST['email'];
        $password = $_POST['Password1'];
        
        if(empty($username) || empty($password)){
            header("location: ../companylogin?error=emptyfields");
            exit();
        }else{
            $sql = "SELECT * FROM companyregistration  WHERE  email=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$username]);
            $results = $stmt->rowcount();
            if($row = $stmt->fetch($results )){
                $pwdcheck = password_verify($password, $row['password']);
                if($pwdcheck == false){
                    header("location: ../companylogin?error=wrong-password");
                    exit();
                }elseif($pwdcheck == true){
                    session_start();           
                    $_SESSION['companyname']= $row['companyName'];
                    $_SESSION['email']= $row['email'];
                    $_SESSION['id']=$row['id'];
                    header("location: ../processpost");
                    exit();
                }else{
                    header("location: ../companylogin?error=wrong-password");
                    exit();
                }
            }else{
                header("location: ../companylogin?error=no-usser");
                exit();
            }


        }
    }else{
        header("location: ../companylogin");
        exit();
    }