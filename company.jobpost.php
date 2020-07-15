<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="company.jobpost.css?v=<?php echo time() ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body class="joppp">
    <?php  include "companyheader.php" ?>
    <div class="postjob">
        <div class="thejob">
            <form action="includes/companyjob.php" method="post">
            <?php
            $empty = 'fill up all the fields';
            if(isset($_GET['error'])){
                if($_GET['error']== "emptyfields"){
                    echo '<p class = "null" style="color:red;"> fill all the fields!</p>';
                }elseif($_GET['error']== "details error"){
                    echo '<p class = "null" style="color:red;"> Fill the fields correctly!<p>';
                }elseif($_GET['error']== "invalidjobname"){
                    echo '<p class = "null" style="color:red;"> please use a correct format Job Name!</p>';
                }elseif($_GET['error']== "invalidjoblocation"){
                    echo '<p class = "null"style="color:red;">Please use a correct Job Location Name!</p>';
                }
            }
        
           
            if(isset($_GET['posting'])){
                if($_GET['posting']== "success")
                echo '<p class = "correct"style="color:green;font-weight: bolder;"> Job Post successful!</p>';
            }
            ?>
                <label for="jobname">Job Name</label> <br>
                <input type="text" name="jobname" placeholder="enter a job name"> <br>
                <label for="location">Job Location</label> <br>
                <input type="text" name="location" id="joblocation" placeholder="enter a job location"> <br>
                <label for="jobname">Employment Type</label> <br>
                <select name="employment-type" id="job">
                    <option value="">--select--</option>
                    <option value="fulltime">Full Time</option>
                    <option value="parttime">Part Time</option>
                    <option value="Intern & Graduate">Intern & Graduate</option>
                    <option value="fulltime,Part Time">Full Time, Part Time</option>
                    <option value="casual">Casual</option>
                    <option value="Contract">Contract</option>
                </select> <br>
                <label for="payment">Salary</label> <br>
                <select name="Salary" id="job">
                    <option value="">--select--</option>
                    <option value="confidential"><span id="ksh">Ksh</span> confidential</option>
                    <option value="Less than 15,000"><span id="ksh">Ksh</span> Less than 15,000</option>
                    <option value="15,000 - 22,000"><span id="ksh">Ksh</span> 15,000 - 22,000</option>
                    <option value="23,000 - 32,000"><span id="ksh">Ksh</span> 23,000 - 32,000</option>
                    <option value="33,000 - 45,000"><span id="ksh">Ksh</span> 33,000 - 45,000</option>
                    <option value="46,000 - 70,000"><span id="ksh">Ksh</span> 46,000 - 70,000</option>
                    <option value="70,000 - 100,000"><span id="ksh">Ksh</span> 70,000 - 100,000</option>
                    <option value="100,00 - above"><span id="ksh">Ksh</span> 100,00 - above</option>
                </select> <br>
                <label for="overview">Job Overview</label><br>
                <textarea name="overview" id="joboverview"></textarea> <br>
                <label for="responsibility">Duties,Responsibilities & Qualifications</label><br>
                <textarea name="responsibilities" id="responsibility"></textarea> <br>
                <div class="submt">
                    <input type="submit" name="submit-job" value="submit"> <br>
                </div>
            </form>
        </div>
    </div>




    <script>
    CKEDITOR.timestamp = 'something_ran';
    CKEDITOR.replace('responsibility');
    CKEDITOR.replace('joboverview');
    </script>


    <div class="footter" style="position:relative;bottom:0;">
        <?php include "myfooter.php";
?>
    </div>
</body>

</html>