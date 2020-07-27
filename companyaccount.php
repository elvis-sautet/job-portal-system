<?php
include "includes/companysessions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company_Profile</title>
    <link rel="stylesheet" href="stylesheets\homepage.css">
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG" >

</head>

<body class="zoomin">
    <?php
  include "companyheader.php";
?>
    <?php 
$companyid = $user['id'];

    $sqlprofile = "SELECT *  FROM companyregistration WHERE id=$companyid ";
    $result = $conn->query($sqlprofile);
    $resultcount = $result->rowcount();
    
    if($resultcount > 0 ){
        while($rowprofile =$result->fetch()){            
            $profile = $rowprofile->companyprofile;
            if($profile == NULL){
                ?>
    <div class='careerprofile'>
        <div class="topic">
            <p class="names">Employment & Availability</p>
        </div>
        <p class="names">Keeping this section up to date will help employers & recruiters find you. <br>
            They will know the field you are in, what your preferred industries are and if you are actively looking.
        </p>
        <hr>
        <img class='proflepic' src='profiles/mainpic.png'> <br>
        <div class='uploadit'>
            <form action="companyprofile.php" method="POST" enctype="multipart/form-data">
                <label for="file" id="lbl">choose profile</label> <br>
                <input type="file" name="file"> <br><br>
                <input type="submit" name="upload" value="UPLOAD">
            </form>
        </div>
    </div>



    <?php
            }else{
                ?>
    <div class='careerprofile'>
        <div class="topic">
            <p class="names">Employment & Availability</p>
        </div>
        <p class="names">Keeping this section up to date will help employers & recruiters find you. <br>
            They will know the field you are in, what your preferred industries are and if you are actively looking.
        </p>
        <hr>
        <div class="imgto">
            <div class="containing">
                <img class='proflepic' src="profiles/<?php echo $profile?>?<?php mt_rand()?>">
            </div>
        </div>
        <br>
        
        <div class='uploadit'>
        <?php
                if(isset($_SESSION['cannot'])){
                    echo "
                      
                    <p style='color:red'>".$_SESSION['cannot']."</p>
                      
                    ";
                    unset($_SESSION['cannot']);
                  }
                  if(isset($_SESSION['pass'])){
                    echo "
                      <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-check'></i> Success!</h4>
                        ".$_SESSION['pass']."
                      </div>
                    ";
                    unset($_SESSION['pass']);
                  }
            ?>
            <form action="companyprofile.php" method="POST" enctype="multipart/form-data">
                <label for="file" id="lbl">choose profile</label> <br>
                <input type="file" name="file"> <br> <br>
                <input type="submit" name="upload" value="UPLOAD">
            </form>
        </div>
    </div>
    <?php
            }
            
        }
    }else{
        echo "SQL error";
    }
    

    
    
?>

<?php
  include "myfooter.php";
?>