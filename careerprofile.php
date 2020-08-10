<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="stylesheets/usersprofileupdate.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career_Profile</title>
    <link rel="stylesheet" href="stylesheets\homepage.css">
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG" >

</head>
<body  >
    <?php
  include "homepageheader.php";
?>
    <?php 
$userid = $user['id'];
    $sqlprofile = "SELECT *  FROM job_seeker_registration WHERE id=$userid ";
    $result = $conn->query($sqlprofile);
    $resultcount = $result->rowcount();
    
    if($resultcount > 0 ){
        while($rowprofile =$result->fetch()){            
            $profile = $rowprofile->profileimage;
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
        <?php
                if(isset($_SESSION['failed'])){
                ?>
                    <script>
                    swal ( "Oops" , "<?php echo $_SESSION["failed"]   ?>" ,  "error" )
         
                     </script>
                    
                    <?php
                    unset($_SESSION['failed']);
                  }
                  if(isset($_SESSION['pass'])){
                      ?>
                      <script>
                    swal({
                        title: "Profile uploaded successfully!",
                        // text: "You clicked the button!",
                        icon: "success",
                        button: "Okay!",
                        });
                    </script>
                    <?php
                    unset($_SESSION['pass']);
                  }
            ?>
            <form action="profileupload.php" method="POST" enctype="multipart/form-data">
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
                if(isset($_SESSION['failed'])){
                ?>
                    <script>
                    swal ( "Oops" , "<?php echo $_SESSION["failed"]   ?>" ,  "error" )
         
                     </script>
                    
                    <?php
                    unset($_SESSION['failed']);
                  }
                  if(isset($_SESSION['pass'])){
                      ?>
                      <script>
                    swal({
                        title: "Profile uploaded successfully!",
                        // text: "You clicked the button!",
                        icon: "success",
                        button: "Okay!",
                        });
                    </script>
                    <?php
                    unset($_SESSION['pass']);
                  }
            ?>
            <form action="profileupload.php" method="POST" enctype="multipart/form-data">
                <label for="file" id="lbl">choose profile</label> <br>
                <input type="file" name="file" > <br> <br>
                <input type="submit" name="upload" value="UPLOAD" id="uploadme">
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
 <div class="usersdaa">
        <div class="profiling">
            <div class="accountsettun">
                <h2 class="settings">Account Settings</h2>
            </div>
            <div class="formaccount">

<?php
 require "includes/dbconnection.php";
 $id = $_SESSION['id'];
$sql = "SELECT* FROM job_seeker_registration WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$result=$stmt->rowcount();
if($result>0){
    while($row = $stmt->fetch()){
       $username= $row->username;
       $firstname= $row->firstname;
       $lastname =  $row->lastname;
       $email= $row->email;
       $phoneno= $row->phonenumber;
?>
                <form action="includes/userprofileupdate.php" Method="Post">
                    <label for="firstname">Fistname</label><br>
                    <input type="text" name="fname" value="<?php echo  $firstname;     ?>"><br>
                    <label for="lastname">Lastname</label><br>
                    <input type="text" name="lname" value="<?php echo  $lastname;     ?>"><br>
                    <label for="email">Email</label><br>
                    <input type="text" name="email" value="<?php echo  $email;     ?>"><br>
                    <label for="phone">Phone</label><br>
                    <input type="number" name="number" value="<?php echo  $phoneno; ?>"><br>
                    <br>
                    <input type="submit" name="Update" value="Update">
                </form>
            </div>
        </div>
    </div>
    <?php  }
}else{
    echo "something went wrong, please try again!";
}  ?>
<?php
  include "myfooter.php";
?>

</body>

</html>