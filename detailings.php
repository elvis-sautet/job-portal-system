<?php
include "includes\companysessions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylesheets\jobapplication.css?v=<?php echo time()   ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG">
    <title>Applicant</title>
</head>
<style>
.detailing {
    background-color: #f2f2f2;
}
</style>

<body class="detailing">
    <?php
    include "companyheader.php";
?>
    <?php
    if(isset($_GET['A'])){
      $applicant = $_GET['A'];
        $sql = "SELECT * FROM jobapplicantion  WHERE id = ? ";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$applicant]);
        $rows = $stmt->rowcount();
        if($rows >0){
            while($row = $stmt->fetch()){
               $id = $row->applicant_id;
                $firstname = $row->firstname;
                $lastname = $row->lastname;
                $mobilenumber = $row->mobilenumber;
                $qualification = $row->qualification;
                $experience = $row->experience;
                $salaryexpected = $row->salaryexpected;
                $coverletter = $row->coverletter;
                $Cv = $row->CV;
                $jobname=$row->Jobname;
              $jobid=$row->id;
              $message =$row->Message;

        $_SESSION['jobidplaced'] =$jobid;
        $_SESSION['loggedcompanynow'] = $user['id'];
        $_SESSION['jobnameapplied']=$row->Jobname;
           ?>
    <br>
    <div class="person">
        <div class="detailsof">
            <div class="ontop">
                <span class="namesto"><span class="egg">names:</span> <?php echo $firstname   ?></span>
                <span class="namesto"><?php echo $lastname  ?></span> <br>
                <span class="mobile"><span class="egg">phone:</span> <?php echo "0".$mobilenumber;  ?></span> <br>
                <span class="qualifiexper"><span class="egg">Qualification:</span> <?php echo $qualification  ?></span>
                <br>
                <span class="qualifiexper"><span class="egg">job appllied:</span> <?php echo $jobname  ?></span> <br>

                <span class="qualifiexper"><span class="egg">experience:</span> <?php echo $experience  ?></span> <br>
                <span class="expectedsalary"><span class="egg">salary expected:
                    </span><?php echo $salaryexpected  ?></span> <br>
            </div>
            <br>
            <div class="coverllter">
                <span class="coverletter"><?php echo $coverletter  ?></span> <br>

            </div>
            <br>
            <?php
                    if($message == null){
                ?>
            <div class="applicationl">
                <div class="reject">
                    <a class="rejectapp cvdownload" href="#">Reject</a>

                </div>
                <div class="cvdownloading">
                    <a class="somecv cvdownload" href="includes/downloadfile?file=<?php echo $Cv ?>">CV <i
                            class="fas fa-download"></i></a>
                </div>
                <div class="shortlist">
                    <a class="accept cvdownload" href="#">Accept <i class="fas fa-comments" style="color:black"></i></a>
                </div>
            </div>
            
            <?php
                    }else{
                        ?>
            <div class="applicationl">
                <div class="reject" style="  pointer-events: none;">
                    <a class="rejectapp cvdownload" href="#"style="cursor: no-drop;" >Reject/deny <i class="fas fa-lock" style="color:red;"></i></a>

                </div>
                <div class="cvdownloading" style="  pointer-events: none;">
                    <a class="somecv cvdownload" href="includes/downloadfile?file=<?php echo $Cv ?>" style="cursor: no-drop;">CV<i class="fas fa-lock" style="color:red;"></i> <i
                            class="fas fa-download"   ></i></a>
                </div>
                <div class="shortlist"  style="  pointer-events: none;">
                    <a class="accept cvdownload" href="#" style="cursor: no-drop;">Hire <i class="fas fa-comments" style="color:black;  pointer-events: none;" disabled><i class="fas fa-lock" style="color:red;"></i></i></a>
                </div>
            </div>
            <div class="imgsnapo">
    <img src="uploads\repliedtag.PNG" alt="" id="taged">
</div>
            <?php
                    }
            ?>

        </div>
    </div>
    <br>
    <?php
$companyName =  $user['companyName']
    ?>
    <div class="messaging">
        <div class="form">
            <i class="fas fa-times"></i>
            <form action="includes/applicationfeedback.php" method="POST">
                <label for="cname">To:</label> <br>
                <input type="text" name="sender" value="<?php echo $firstname ." " . $lastname  ?>" readonly> <br>
                <label for="by">By:</label> <br>
                <input type="text" name="bywho" value="<?php  echo $companyName  ?>" readonly> <br>
                <label for="by">Jobname:</label> <br>
                <input type="text" name="jobapplied" value="<?php  echo $jobname  ?>" readonly> <br>
                <label for="messge">Message</label> <br>
                <textarea name="message" id="somett" cols="30" rows="6" placeholder="message here... 250 words"
                    maxlength="250" required></textarea>
                <div class="cend">
                    <input type="submit" id="messsagesss" name="send" value="send">
                </div>
            </form>
        </div>
    </div>

    <?php
            }
        }
    }
?>
    <script src="javafile\jquery.js"></script>

</body>

</html>