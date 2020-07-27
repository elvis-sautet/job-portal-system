<?php
include "includes\companysessions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="stylesheets\jobapplication.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG">
    <title>Applicant</title>
</head>
<style>
.detailing{
    background-color:#f2f2f2;
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
               $id = $row->id;
                $firstname = $row->firstname;
                $lastname = $row->lastname;
                $mobilenumber = $row->mobilenumber;
                $qualification = $row->qualification;
                $experience = $row->experience;
                $salaryexpected = $row->salaryexpected;
                $coverletter = $row->coverletter;
                $Cv = $row->CV;
            
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
                <span class="qualifiexper"><span class="egg">experience:</span> <?php echo $experience  ?></span> <br>
                <span class="expectedsalary"><span class="egg">salary expected:
                    </span><?php echo $salaryexpected  ?></span> <br>
            </div>
            <br>
            <div class="coverllter">
                <span class="coverletter"><?php echo $coverletter  ?></span> <br>
            </div>
            <br>
            <div class="cvdownloading">
            <a class="cvdownload" href="includes/downloadfile?file=<?php echo $Cv ?>">download cv</a>
            </div>
        </div>
    </div>

    <br>
    <?php
            }
        }
    }


?>
</body>
</html>