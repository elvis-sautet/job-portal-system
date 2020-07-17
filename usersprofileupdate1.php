<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylesheets/usersprofileupdate.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    include "homepageheader.php";
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
</body>

</html>