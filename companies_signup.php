<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="company_signup.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
include "header.php";
?>
<body class="sign">
    <div class="company">
        <div class="detailing">
            <form action="includes/companyregistration.php" method="POST">
                <label for="username">User Name<span class="required">*</span></label> <br>
                <input type="text" name="username1" id="uname" placeholder="username required"> <br>
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