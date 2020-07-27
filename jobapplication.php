<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobApplication</title>
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG">

    <head>
        <link rel="stylesheet" href="stylesheets/jobapplication.css?v=<?php echo time()   ?>">
        <script src="ckeditor/ckeditor.js"></script>

    </head>

<body>
    <?php include_once "homepageheader.php";
  
  ?>
    <?php
require 'includes/dbconnection.php';
if(isset($_GET['companyname'])){
    $idcompany= $_GET['companyname'];
   $_SESSION['page'] = $idcompany;
    $sql = "SELECT * FROM jobpost WHERE id=$idcompany";
    $stmt = $conn->query($sql);
    while($row = $stmt->fetch()){
        $_SESSION['idof']=$row->id;
        $_SESSION['jobname']=$row->jobname;
        $_SESSION['companyname']=$row->companyname;
        $_SESSION['joblocation']=$row->joblocation;
        $_SESSION['employment_type']=$row->employment_type;
        $_SESSION['jobsalary']=$row->job_salary;
        $_SESSION['joboverview'] = $row->joboverview;
        $_SESSION['jobduties']=$row->jobduties;
    }
}
?>


    <div class="jobsheader">
        <div class="jobsin">
            <a class="goto" href="#">
                <p class="jobname"><?php echo $_SESSION['jobname']; ?></p>
            </a>
            <p class="companyname"><?php echo  $_SESSION['companyname']; ?></p>
            <span id="some" class="joblocation"><?php echo  $_SESSION['joblocation']; ?><span style='color:gray'> |
                </span>
                <span id="some" class="employment_type"> <?php  echo $_SESSION['employment_type']; ?>
                    <span id="some" class="jobsalary"><span style='color:gray'> | </span><span
                            style='font-weight:bold'>Ksh </span><?php echo $_SESSION['jobsalary']; ?></span>

                    <div class="jobsumarry"><?php echo  $_SESSION['joboverview'] ?></div>

                    <div class="jobsumarry"><?php echo  $_SESSION['jobduties'] ?></div>
        </div>
    </div>





    <?php     
   $id = $_SESSION['id'];
   $sql = "SELECT* FROM job_seeker_registration WHERE id=?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$id]);
   $result=$stmt->rowcount();
   if($result>0){
       while($row = $stmt->fetch()){
          $firstname= $row->firstname;
          $lastname =  $row->lastname;
          $phoneno= $row->phonenumber;
       }
    }
?>

    <div class="apply">
        <div class="jobto">
            <div class="applyhere">
                <p class="note">Apply here</p>
                <p class="somenotes">Note: The application form uses some of your saved account details. </p>
            </div>
            <div class="accountdetails">
                <?php
                if(isset($_SESSION['error'])){
                    echo "
                      <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-warning'></i> Error!</h4>
                        ".$_SESSION['error']."
                      </div>
                    ";
                    unset($_SESSION['error']);
                  }
                  if(isset($_SESSION['success'])){
                    echo "
                      <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-check'></i> Success!</h4>
                        ".$_SESSION['success']."
                      </div>
                    ";
                    unset($_SESSION['success']);
                  }
            ?>
                <form action="includes/jobaplly.php" enctype="multipart/form-data" method="post" id="getch">
                    <label for="job_id">Company_Name</label> <br>
                    <input type="text" name="companyname" class="offset" id="txt"
                        value="<?php echo  $_SESSION['companyname'] ?>" readonly> <br>
                    <label for="firstaname">Job Name</label> <br>
                    <input type="text" name="jbname" class="offset" id="txt" value="<?php echo $_SESSION['jobname'] ?>"
                        readonly> <br>
                    <label for="firstaname">firstname</label> <br>
                    <input type="text" name="fname" id="txt" value="<?php echo $firstname  ?>" readonly> <br>
                    <label for="lastname">Lastname</label> <br>
                    <input type="text" name="lname" id="txt" value="<?php echo $lastname          ?>" readonly> <br>
                    <label for="phone">Mobile Number</label><br>
                    <input type="number" name="phonenumber" id="txt" value="<?php     echo    '0'.$phoneno          ?>"
                        readonly> <br>
                    <label for="qualifications">Minimum qualifications</label> <br>
                    <select name="Qualifications" id="qualification" required>
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
                    <select name="experience" id="experiecedyrs" required>
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
                    <input type="number" name="salary" id="txtadd" required>
                    <!-- from text to number validation pregmatch()   --> <br>
                    <label for="coverletter">Cover Letter</label> <br>
                    <textarea name="coverletter" rows="7" cols="34" required></textarea> <br>
                    <label for="cvattatch"> Attach a CV</label> <br>
                    <input type="file" name="CV" required> <br>
                    <br>
                    <input type="submit" name="apply-Job" value="Apply">
                </form>
            </div>
        </div>

    </div>
<br>

    
  

</body>

</html>