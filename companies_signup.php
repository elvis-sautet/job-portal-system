<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                    echo '
                    <script>
                    swal ( "Oops" ,  "fields cannot be empty!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "details error"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "please fill the fields in a correct format!!" ,  "error" )
                     </script>
                    ';
                }elseif($_GET['error']== "invalidemail"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "Email is incorrect!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "invalidusername"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "username is invalid!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "invalidcompanyname"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "company name is invalid!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "usernametaken"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "username error!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "invalidaddress"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "Invalid address format!!" ,  "error" )
         
                     </script>
                    ';
                }elseif($_GET['error']== "Companyandemailshouldbeunique"){
                    echo '
                    <script>
                    swal ( "Oops" ,  "Company Name and Email must be unique!!" ,  "error" )
         
                     </script>
                    ';
                }
            }
        
           
            if(isset($_GET['signup'])){
                if($_GET['signup']== "success")
                echo '
                swal({
                    icon: "success",
                  });
                  ';
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