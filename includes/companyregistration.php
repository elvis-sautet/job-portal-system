<?php

if(isset($_POST['register-company'])){
    require "dbconnection.php";
    
    $companyname=$_POST['cname'];
    $adress=$_POST['cAdress'];
    $email=$_POST['email'];
    $password=$_POST['password1'];

    if(empty($username) ||empty($companyname)||empty($adress)||empty($email)||empty($password) ){
        header("location: ../companies_signup?error=emptyfields&username1=".$username."&cname=".$companyname."&cAdress=".$adress."&email=".$email."&password1=".$password);
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username) && !preg_match("/^[a-zA-Z0-9]*$/",$companyname) && !preg_match("/^[0-9]*$/",$adress)  ){
        header("Location: ../companies_signup?error=details error");
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../companies_signup?error=invalidemail&username1=".$username."&cname=".$companyname."&cAdress=".$adress);
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9\s_-]*$/",$username)){
        header("Location: ../companies_signup?error=invalidusername&cname=".$companyname."&cAdress=".$adress."&email=".$email);
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9\s_-{'&'}]*$/",$companyname)){
        header("Location: ../companies_signup?error=invalidcompanyname&username1=".$username."&cAdress=".$adress."&email=".$email);
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9\s_-]*$/",$adress)){
        header("Location: ../companies_signup?error=invalidaddress&username1=".$username."&email=".$email."&cname=".$companyname);
        exit();
    }else{
        $sql = "SELECT CompanyName, Email  FROM companyregistration WHERE CompanyName = ? or Email=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$companyname,$email]);
        $checkresult=$stmt->rowcount();
        if($checkresult>0){
            header("Location: ../companies_signup?error=Companyandemailshouldbeunique");
            exit(); 
        }else{
            $hashedpass= password_hash($password,PASSWORD_DEFAULT );
            $sql = "INSERT INTO companyregistration (companyName,CompanyAddress,Email,password) VALUES (?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt ->execute([$companyname,$adress,$email,$hashedpass]);
            header("Location: ../companylogin?registration=success");
            exit();
        }
        
    }
    $stmt->closeCursor();
    $conn=null;
    
}else{
    header("location: ../companies_signup");
    exit();
}