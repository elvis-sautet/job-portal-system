<head>
    <link rel="stylesheet" href="jobapplication.css?v=<?php echo time()   ?>">

</head>
<body>
<?php include "homepageheader.php";?>
<?php
require 'includes/dbconnection.php';
if(isset($_GET['companyname'])){
    $id= $_GET['companyname'];
    $sql = "SELECT * FROM jobpost WHERE id=$id";
    $stmt = $conn->query($sql);
    while($row = $stmt->fetch()){
        $id=$row->id;
        $jbname=$row->jobname;
        $companyname=$row->companyname;
        $joblocation=$row->joblocation;
        $employment_type=$row->employment_type;
        $job_salary=$row->job_salary;
        $overview = $row->joboverview;
        $jobduties=$row->jobduties;
        
    }
    
}
?>
    <div class="jobsheader">
        <div class="jobsin">
            <a class="goto" href="#">
                <p class="jobname"><?php echo $jbname; ?></p>
            </a>
            <p class="companyname"><?php echo  $companyname; ?></p>
            <span id="some" class="joblocation"><?php echo  $joblocation; ?><span style='color:gray'> | </span>
            <span id="some" class="employment_type"> <?php  echo $employment_type; ?>
            <span id="some" class="jobsalary"><span style='color:gray'> | </span><span
                            style='font-weight:bold'>Ksh </span><?php echo $job_salary; ?></span>

            <div class="jobsumarry"><?php echo  $overview ?></div>

            <div class="jobsumarry"><?php echo  $jobduties ?></div>
        </div>
    </div>
 
</body>
