<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="signupp">
    <?php
$company="OneCode";
$jobseeker="Job seeker";
$jobgiver="Recruiter";

    ?>
    <?php include "header.php";
    ?>
    <div class="register">
        <div class="register1">
            <div class="heading">
                <h2 class="work" style="color:#002244;font-weight:bold;" >Register to <?php echo $company ?> Today to and get employed</h2>
                <p class="ex"><?php echo $company?> Team is ready to help you with any questions or assistance. Our goal
                    is to solve all your questions and problems quickly and efficiently, and to help you become familiar
                    with
                    <?php echo $company?> features.</p>
            </div>
            <div class="starthere">
                <p class="some">You are <span class="required">*</span></p>
            </div>

            <?php
            $empty = 'fill up all the fields';
            if(isset($_GET['error'])){
                if($_GET['error']== "emptyfields"){
                    echo '<p class = "null"> fill all the fields!</p>';
                }elseif($_GET['error']== "details error"){
                    echo '<p class = "null"> Fill the fields properly !<p>';
                }elseif($_GET['error']== "invalidemail"){
                    echo '<p class = "null"> incorrect email!</p>';
                }elseif($_GET['error']== "invalidusername"){
                    echo '<p class = "null"> please use a correct format username!</p>';
                }elseif($_GET['error']== "invalidfirstname"){
                    echo '<p class = "null">Please use a correct firstname!</p>';
                }elseif($_GET['error']== "invalidlastname"){
                    echo '<p class="null">Please use a correct Laststname!</p>';
                }elseif($_GET['error']== "usernametaken"){
                    echo '<p class="null"> please use another username, this is already taken!<span>';
                }
            }
        
           
            if(isset($_GET['signup'])){
                if($_GET['signup']== "success")
                echo '<p class = "correct"> Signup successful!</p>';
            }
            ?>


            <div class="detailing">
                <form action="includes/registration.php" method="POST">
                    <label for="username">User Name<span class="required">*</span></label> <br>
                    <input type="text" name="username1" id="uname"> <br>

                    <label for="firstname">First Name <span class="required">*</span></label> <br>
                    <input type="text" name="fname"> <br>
                    <label for="lastname">Last Name <span class="required">*</span></label> <br>
                    <input type="text" name="lname"> <br>

                    <label for="emaill">Email<span class="required">*</span></label> <br>
                    <input type="text" name="email"> <br>
                    <label for="password">password<span class="required">*</span></label><br>
                    <input type="password" name="password1" id="mypass" onclick=" check()"> <br>
                    <label for="confirmpassword">Confirm password<span class="required">*</span></label><br>
                    <input type="password" name="confirm_password" onclick=" check()" id="my_pass"><br>
                    <span style="color:red" id="validating" class="verify"></span> <br>
                    <input type="checkbox" style="zoom:1.5;" onclick="showpass()"><span style="color:brown;">Check
                        Password</span> <br> <br>
                    <div class="submit">
                        <input type="submit" name="register-submit" value="Register Now">
                    </div>
                </form>
            </div>
            <br>
            <div class="haveac">
                <a href="login.php?welcome" class="have">Have Account? Login Here👉👉</a>

            </div>
        </div>
    </div>
    <script src="signup.js"></script>
    <?php include "myfooter.php";
    ?>
</body>

</html>