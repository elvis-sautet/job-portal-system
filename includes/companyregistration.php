<?php


if(isset($_POST['register-company'])){
    require "dbconnection.php";
    
    $username=$_POST['username1'];
    $companyname=$_POST['cname'];
    $adress=$_POST['cAdress'];
    $email=$_POST['email'];
    $password=$_POST['password1'];

    if(empty($username) ||empty($companyname)||empty($adress)||empty($email)||empty($password) ){
        header("location: ../companies_signup.php?error=emptyfields&username1=".$username."&cname=".$companyname."&cAdress=".$adress."&email=".$email."&password1=".$password);
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username) && !preg_match("/^[a-zA-Z0-9]*$/",$companyname) && !preg_match("/^[0-9]*$/",$adress)  ){
        header("Location: ../companies_signup.php?error=details error");
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../companies_signup.php?error=invalidemail&username1=".$username."&cname=".$companyname."&cAdress=".$adress);
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../companies_signup.php?error=invalidusername&cname=".$companyname."&cAdress=".$adress."&email=".$email);
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$companyname)){
        header("Location: ../companies_signup.php?error=invalidcompanyname&username1=".$username."&cAdress=".$adress."&email=".$email);
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$adress)){
        header("Location: ../companies_signup.php?error=invalidaddress&username1=".$username."&email=".$email."&cname=".$companyname);
        exit();
    }else{
        $sql = "SELECT username FROM companyregistration WHERE username=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);
        $checkresult=$stmt->rowcount();
        if($checkresult>0){
            header("Location: ../companies_signup.php?error=usernametaken&email=".$email);
            exit(); 
        }else{
            $hashedpass= password_hash($password,PASSWORD_DEFAULT );
            $sql = "INSERT INTO companyregistration (userName,companyName,CompanyAddress,Email,password) VALUES (?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt ->execute([$username,$companyname,$adress,$email,$hashedpass]);
            header("Location: ../companies_signup.php?signup=success");
            exit();
        }
        
    }
    $stmt->closeCursor();
    $conn=null;
    
}else{
    header("location: ../companies_signup.php");
    exit();
}