<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylesheets/company_signup.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG" >

    <title>company_signup</title>
</head>
<?php 
include "header.php";
?>
<body class="sign">
    <div class="company">
        <div class="detailing">
        <?php
            $empty = 'fill up all the fields';
            if(isset($_GET['error'])){
                if($_GET['error']== "emptyfields"){
                    echo '<p class = "null" style="color:red"> fill all the fields!</p>';
                }elseif($_GET['error']== "details error"){
                    echo '<p class = "null" style="color:red"> Fill the fields Correctly !<p>';
                }elseif($_GET['error']== "invalidemail"){
                    echo '<p class = "null" style="color:red"> incorrect email!</p>';
                }elseif($_GET['error']== "invalidusername"){
                    echo '<p class = "null" style="color:red"> please use a correct format username!</p>';
                }elseif($_GET['error']== "invalidcompanyname"){
                    echo '<p class = "null" style="color:red">Please use a correct company name!!</p>';
                }elseif($_GET['error']== "usernametaken"){
                    echo '<p class="null" style="color:red"> please use another username, this is already taken!<span>';
                }elseif($_GET['error']== "invalidaddress"){
                    echo '<p class="null" style="color:red"> please use a correct address!<span>';
                }elseif($_GET['error']== "Companyandemailshouldbeunique"){
                    echo '<p class="null" style="color:red"> Email and company Name must be unique and valid !!<span>';
                }
            }
        
           
            if(isset($_GET['signup'])){
                if($_GET['signup']== "success")
                echo '<p class = "correct" style="color:green"> Signup successful!</p>';
            }
            ?>
            <form action="includes/companyregistration.php" method="POST">
                <label for="firstname">Company Name<span class="required">*</span></label> <br>
                <input type="text" name="cname" placeholder="Company name required"> <br>
                <label for="lastname">Company Location <span class="required">*</span></label> <br>
                <input type="text" name="cAdress" placeholder="Address required"> <br>
                <label for="emaill">Email<span class="required">*</span></label> <br>
                <input type="text" name="email" placeholder="company email required"> <br>
                <label for="password">password<span class="required">*</span></label><br>
                <input type="password" name="password1" id="mypass" onclick=" check()"> <br>
                <label for="confirmpassword">Confirm password<span class="required">*</span></label><br>
                <input type="password" name="confirm_password" onclick="check()" id="my_pass"><br>
                <span style="color:red" id="validating"></span> <br>
                <input type="checkbox" style="zoom:1.5;" onclick="showpass()"><span style="color:brown;">Check
                    Password</span> <br> <br>
 
                <div class="submit">
                    <input type="submit" name="register-company" value="Register">
                </div>
            </form>
        </div>
        <br>
        <div class="have">
            <a href="companylogin.php" class="haveacc">Have Account? Login Here👉👉</a>
        </div>
    </div>
    <script src="signup.js"> </script>
    <?php 
include "myfooter.php";
?>
</body>
</html>