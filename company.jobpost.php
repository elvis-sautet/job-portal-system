<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="company.jobpost.css?v=<?php echo time() ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <?php  include "companyheader.php"  ?>
    <div class="postjob">
        <div class="thejob">
            <form action="#">
                <label for="jobname">Job Name</label> <br>
                <input type="text" name="jobname" placeholder="enter a job name"> <br>
                <label for="companyn">Company Name</label> <br>
                <input type="text" name="companyname" id="companynam" placeholder="enter the company name"> <br>
                <label for="location">Job Location</label> <br>
                <input type="text" name="location" id="joblocation"placeholder="enter a job location"> <br>
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
</body>

</html>