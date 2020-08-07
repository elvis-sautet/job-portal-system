<?php
include "includes\companysessions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylesheets\jobapplication.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>applications</title>
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG">
</head>

<body class="applications">
    <?php
    function customized_echo($coverletter, $length){
        if(strlen($coverletter)<=$length){
            echo $coverletter;
        }else{
            $y=substr($coverletter,0,$length) . '  ...';
            echo $y;
        } 
        
    }
    include "companyheader.php";
    include "includes\dbconnection.php";
    ?>
    <?php
    $companylogged = $user['companyName'];
    $companyid = $user['id'];
    $sqlprofile = "SELECT *  FROM jobpost WHERE company_id=$companyid ";
    $result = $conn->query($sqlprofile);
    $resultcount = $result->rowcount();
    if($resultcount >0){
    $sql = "SELECT * FROM jobapplicantion WHERE companyname = ?  ORDER BY id DESC  ";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$companylogged]);
    $rows = $stmt->rowcount();
    if($rows >0){
        while($row = $stmt->fetch()){
            $id = $row->id;
            $firstname = $row->firstname;
            $lastname = $row->lastname;
            $mobilenumber = $row->mobilenumber;
            $qualification = $row->qualification;
            $experience = $row->experience;
            $salaryexpected = $row->salaryexpected;
            $coverletter = $row->coverletter;
            $Cv = $row->CV;
            $jobname=$row->Jobname;
            $message =$row->Message;
            
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
                <span class="qualifiexper"><span class="egg">job applied:</span> <?php echo $jobname  ?></span> <br>

                <span class="qualifiexper"><span class="egg">experience:</span> <?php echo $experience  ?></span> <br>
                <span class="expectedsalary"><span class="egg">salary expected:
                    </span><?php echo $salaryexpected  ?></span> <br>
            </div>
            <br>
            <div class="coverllter">
                <span class="coverletter"><?php echo customized_echo($coverletter, 100)  ?></span> <br>
            </div>
            <br>
            <div class="ticksreplied">
            <?php
    if($message == null){
        ?>
        <img src="uploads\pending.PNG" class="pending" style="height:60px;">
        <?php
    }else{
        ?>
<div class="imgsnapo">
    <img src="uploads\repliedtag.PNG" alt="" id="taged">
</div>

<?php
    }

?>        </div>
            <div class="cvdownloading">
                <a class="cvdownload" href="detailings?A=<?php echo $id ?>">View more...</a>
            </div>
        </div>
    </div>

    <br>
    <?php
        }
    }else{
        ?>
    <br>
    <br>
    <div class="alert alert-success" role="alert" style="width:50%;margin:auto;ba">
        <h4 class="alert-heading" style="text-align:center;font-weight:800;">Hey <?php echo $user['companyName'] ?>,
        </h4>
        <p style="color:red;text-align:center;">There are no applicants yet,</p>
        <hr>
        <p class="mb-0">Whenever a job is applied the applications will apear here automaticaly, together with the job
            seeker CV attachment file and some of his information.</p>
        <p style="color:#007bff;text-align:center;">Thank you for trusting us, incase of any issue directly contact us
            through <a href="mailto:sautetelvis4148@gmail.com" style="color:#2b2b2b;font-weight:800;">Click me</a>. </p>
    </div>

    <?php
    }
}else{
    ?>
    <br>
    <br>
    <div class="alert alert-success" role="alert" style="width:50%;margin:auto;">
        <h4 class="alert-heading" style="text-align:center;font-weight:800;">Hey <?php echo $user['companyName'] ?>,
        </h4>
        <p style="color:red;text-align:center;">You have not posted any job</p>
        <hr>
        <p style="color:#007bff;text-align:center;">Thank you for trusting us, incase of any issue directly contact us
            through <a href="mailto:sautetelvis4148@gmail.com" style="color:#2b2b2b;font-weight:800;">Click me</a>. </p>
    </div>
<?php
 $sql = "SELECT * FROM jobapplicantion WHERE companyname = ?  ORDER BY id DESC  ";
 $stmt = $conn->prepare($sql);
 $stmt->execute([$companylogged]);
 $rows = $stmt->rowcount();

 if($rows>0){
     ?>
 <br>
<div class="alert alert-dark" role="alert" style="width:fit-content;margin:auto;margin-bottom:12px;">
  <a href="#" class="alert-link" style="pointer-events:none;">Recent Applications.</a>
</div>
     <?php
     while($row = $stmt->fetch()){
         $id = $row->id;
         $firstname = $row->firstname;
         $lastname = $row->lastname;
         $mobilenumber = $row->mobilenumber;
         $qualification = $row->qualification;
         $experience = $row->experience;
         $salaryexpected = $row->salaryexpected;
         $coverletter = $row->coverletter;
         $Cv = $row->CV;
         $jobname=$row->Jobname;
         $message =$row->Message; 
?>

    <div class="person">
        <div class="detailsof">
            <div class="ontop">
                <span class="namesto"><span class="egg">names:</span> <?php echo $firstname   ?></span>
                <span class="namesto"><?php echo $lastname  ?></span> <br>
                <span class="mobile"><span class="egg">phone:</span> <?php echo "0".$mobilenumber;  ?></span> <br>
                <span class="qualifiexper"><span class="egg">Qualification:</span> <?php echo $qualification  ?></span>
                <br>
                <span class="qualifiexper"><span class="egg">job applied:</span> <?php echo $jobname  ?></span> <br>

                <span class="qualifiexper"><span class="egg">experience:</span> <?php echo $experience  ?></span> <br>
                <span class="expectedsalary"><span class="egg">salary expected:
                    </span><?php echo $salaryexpected  ?></span> <br>
            </div>
            <br>
            <div class="coverllter">
                <span class="coverletter"><?php echo customized_echo($coverletter, 100)  ?></span> <br>
            </div>
            <br>
            <div class="ticksreplied">
            <?php
    if($message == null){
        ?>
        <img src="uploads\pending.PNG" class="pending" style="height:60px;">
        <?php
    }else{
        ?>
<div class="imgsnapo">
    <img src="uploads\repliedtag.PNG" alt="" id="taged">
</div>

<?php
    }

?>        </div>
            <div class="cvdownloading">
                <a class="cvdownload" href="detailings?A=<?php echo $id ?>">View more...</a>
            </div>
        </div>
    </div>

    <br>



    <?php
}
 }
}
            include "myfooter.php";
            
?>
</body>

</html>