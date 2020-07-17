<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="stylesheets/login.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doc</title>
</head>

<body class="login">
    <?php include "header.php";
    ?>
    <div class="loginform">
        <div class="allt">
            <p class="signin">Welcome Back💯💯</p>
            <div class="form">
                <form method="post" action="includes/login.php">
                    <label for="username">Enter Username</label> <br>
                    <input type="text" name="usernameemail"> <br>
                    <label for="myPassword">Enter password</label> <br>
                    <input type="password" name="Password1" id="pass"> <br>
                    <input onclick="showpass()" type="checkbox"><span class="show"> Show Password</span> <br>
                    <?php
            
            if(isset($_GET['error'])){
                if($_GET['error']== "emptyfields"){
                    echo '<p class = "null" style="color:red;"> fill all the fields!</p>';
                }elseif($_GET['error']== "wrong-password"){
                    echo '<p class = "null" style="color:red;"> Incorrect Password!<p>';
                }elseif($_GET['error']== "no-usser"){
                    echo '<p class = "null" style="color:red;"> Incorrect username & password!</p>';
                }
            }

            ?>
                    <input type="submit" name="login-submit" value="Sign In">
                </form>
            </div>
            <br>
            <div class="gyeylne"></div>
            <br>
            <div class="otheroptions">
                <a href="#" class="fb">
                    <i class="fab fa-facebook-f"></i> <span class="social">Login with Facebook</span>
                </a>
                <br>
                <a href="#" class="twitter">
                    <i class="fab fa-twitter"></i></i> <span class="social">Login with Twitter</span>
                </a>
                <br>
                <a href="#" class="google"><i class="fab fa-google"></i>
                    </i> <span class="social">Login with Google+</span>
                </a>
            </div>
            <br>
            <div class="getin">
                <p class="txt6">By signing in to your account, you agree to Indeed's <a href="termspolicy.php" class="linksss">Terms
                        of Service </a>and consent to our <a href="termspolicy.php" class="linksss">Cookie Policy</a> and <a
                        href="https://policies.google.com/privacy?hl=en_US" class="linksss">Privacy Policy</a>.
                    This site is protected by reCAPTCHA and the Google <a
                        href="https://policies.google.com/privacy?hl=en_US" class="linksss">Privacy Policy</a>
                    and <a href="termspolicy.php" class="linksss">Terms of Service</a> apply.</p>
            </div>
            <div class="accountcreate">
                <a href="signup.php?welcome%register%here" style="color:#FF00FF;text-transform:capitalize;" class="accountc">Not a member?Create an account free</a>
                <a href="#" class="accountc">Forgot Your Password?</a>
                <a href="#" class="accountc">Help Center</a>
            </div>
        </div>

    </div>
    
<?php include "myfooter.php";
?>
<script src="javafile/login.js"></script>
</body>

</html>