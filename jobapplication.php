<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <head>
        <link rel="stylesheet" href="jobapplication.css?v=<?php echo time()   ?>">
        <script src="ckeditor/ckeditor.js"></script>

    </head>

<body>

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
        
    
    

?>
    <?php include_once "homepageheader.php";
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
    <div class="apply">
        <div class="jobto">
            <div class="applyhere">
                <p class="note">Apply here</p>
                <p class="somenotes">Note: The application form uses some of your saved account details. </p>
            </div>
            <div class="accountdetails">
                <form action="#" enctype="multipart/form-data" method="post" id="getch">
                    <label for="firstaname">firstname</label> <br>
                    <input type="text" name="fname" id="txt"> <br>
                    <label for="lastname">Lastname</label> <br>
                    <input type="text" name="lname" id="txt"> <br>
                    <label for="phone">Mobile Number</label> <br>
                    <input type="number" name="phonenumber" id="txt"> <br>
                    <label for="qualifications">Minimum qualifications</label> <br>
                    <select name="Qualifications" id="qualification">
                        <option value="">Select...</option>
                        <option value="Bachelor">Bachelor</option>
                        <option value="Certificate">Certificate</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Highschool">Highschool</option>
                        <option value="Masters">Masters</option>
                        <option value="PHD">PHD</option>
                        <option value="Postgrad">Postgrad</option>
                        <option value="Unspecified">Unspecified</option>
                    </select> <br>
                    <label for="Experience">Years of Experience</label> <br>
                    <select name="experience" id="experiecedyrs">
                        <option value="">Select...</option>
                        <option value="No Experience/Less Than 1 Year">No Experience/Less Than 1 Year</option>
                        <option value="1 year">1 year</option>
                        <option value="2 years">2 years</option>
                        <option value="3 years">3 years</option>
                        <option value="4 years">4 years</option>
                        <option value="5 years">5 years</option>
                        <option value="6 years">6 years</option>
                        <option value="7 years">7 years</option>
                        <option value="8 years">8 years</option>
                        <option value="9 years">9 years</option>
                        <option value="10 years">10 years</option>
                        <option value="More than 10 years">More than 10 years</option>
                    </select> <br>
                    <label for="salaryexpected">Monthly Salary Expectation</label> <br>
                    <button type="button" class="disable" disabled><span>KES</span></button>
                    <input type="text" name="salary" id="txtadd"> <!-- from text to number validation pregmatch()   --> <br>
                    <label for="coverletter">Cover Letter</label> <br>
                    <textarea name="coverletter" 
                        placeholder="Max. 2000 characters" rows="7" cols="34"></textarea> <br>
                    <label for="cvattatch"> Attach a CV</label> <br>
                    <input type="file" name="CV"> <br>
                    <br>
                    <input type="submit" name="apply-Job" value="Apply">
                </form>
            </div>
        </div>
    </div>
    <br>

    <?php
    
include 'myfooter.php';

    }
}
?>
</body>

</html>