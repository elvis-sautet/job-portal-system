<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="stylesheets/signup.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_up</title>
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG" >

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
          

            <?php
            $empty = 'fill up all the fields';
            if(isset($_GET['error'])){
                if($_GET['error']== "emptyfields"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "fields cannot be empty!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "details error"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "details error!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "invalidemail"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "email is invalid!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "invalidusername"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "please use a correct username format!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "invalidfirstname"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "incorrect firstname format!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "invalidlastname"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "incorrect format of lastname!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "usernametaken"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "Username already taken,please try another!!" ,  "error" )
         
                     </script>
                    ';
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
                    <label for="phone">Phone number<span class="required">*</span></label> <br>
                    <input type="number" name="phone"> <br> <br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label> <br>
                    <label for="password">password<span class="required">*</span></label><br>
                    <input type="password" name="password1" id="mypass" onclick=" check()" > <br>
                    <label for="confirmpassword">Confirm password<span class="required">*</span></label><br>
                    <input type="password" name="confirm_password" onclick=" check()" id="my_pass"><br>
                    <span style="color:red" id="validating" class="verify"></span> <br>
                    <input type="checkbox" style="zoom:1;" onclick="showpass()"><span style="color:brown;">Check
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
    <script src="javafile/signup.js"></script>
    <?php include "myfooter.php";
    ?>
</body>

</html>