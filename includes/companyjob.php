<?php
 session_start();
    if(isset($_POST['submit-job'])){
        require 'dbconnection.php';
    
        $jobname = $_POST['jobname'];
        $joblocation = $_POST['location'];
        $joboverview = $_POST['overview'];
        $jobduties = $_POST['responsibilities'];
        $employment_type = $_POST['employment-type'];
        $job_salary = $_POST['Salary'];


        if(empty($joblocation) ||empty($joboverview) ||empty($jobduties) ||empty($employment_type) ||empty($job_salary) ){
            header("Location: ../company.jobpost.php?error=emptyfields&jobname=".$jobname."&location=".$joblocation."&overview=".$joboverview."&responsibilities=".$jobduties);
            exit();
        }
        elseif(!preg_match("/^[a-zA-Z0-9\s_ '-' :{'+','()',':'}]*$/",$jobname)&& !preg_match("/^[a-zA-Z0-9\s_-]*$/",$joblocation)){
            header("Location: ../signup.php?error=details error");
            exit();
        }
        elseif(!preg_match("/^[a-zA-Z0-9\s_-]*$/",$joblocation)){
            header("Location: ../company.jobpost.php?error=invalidjoblocation&jobname=".$jobname."&overview=".$joboverview."&responsibilities=".$jobduties);
            exit();
        }
        else{
            $companynme= $_SESSION['companyname'];
            $indexed=$_SESSION['id'];
            $sql="INSERT INTO jobpost (company_id,jobname,companyname,joblocation,employment_type,job_salary,joboverview,jobduties) 
                    VALUES(?,?,?,?,?,?,?,?)";
            $stmt=$conn->prepare($sql);
            $stmt->execute([$indexed,$jobname,  $companynme,$joblocation,$employment_type,$job_salary, $joboverview,$jobduties]);
            header("Location: ../company.jobpost.php?posting=success");
            exit();
        }
        $stmt->closeCursor();
        $conn=null;

    }else{
        header("Location: ../company.jobpost.php");
        exit();
    }