<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylesheets/usersprofileupdate.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Black Ops One' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneCode</title>
    <link href='https://fonts.googleapis.com/css?family=Black Ops One' rel='stylesheet'>
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG">
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>

<body id="frontpage">
    <?php include "header.php"?>

    <br>
    <div class="hdn">
    <div class="areyou">
        <div class="ask">
            <p class="ask1">Are you a job seeker or employer?</p>
        </div>
        <div class="body2">
            <div class="ask2">
                <i id="phone" class="fas fa-phone"></i> <br>
                <p class="asktxt">

                    Find out how we help you
                    get you the best candidates
                    all our Solutions Team on
                    <a class="signup1" href="tel:+254768692323">+254768692323</a>
                    to get started.
                </p>
            </div>
            <div class="or">
                <p class="and">or</p>
            </div>
            <div class="ask2">
                <i id="phone" class="fas fa-info-circle"></i>
                <p class="asktxt">
                    <a href="#" class="signup1" id="clickme" style="font-weight:700;">Sign up</a> in OneCode <br> it's
                    quick and easy!
                    Use our tips on best
                    practises and improve your
                    visibility to employers and candidates.
                </p>
            </div>
        </div>
    </div>
    <br> <br>
    <div class="signin-how">
        <img id="closeee" src="index images\close tag.png" alt="">
        <div class="forminghow">
            <div class="firstapplicant">
                <div class="jobseeker"></div>
                <a href="signup.php">Jobseeker</a>
            </div>
            <div class="secondapplicant">
                <div class="employerrr"></div>
                <a href="companies_signup.php">Company/Job Postings</a>
            </div>
        </div>
    </div>
    <!--the responses from our users-->
    <div class="sayings">
        <div class="responses">
            <div class="user1">
                <img id="user1png" src="index images\merin.jpg" alt="">
                <p class="txt1">
                    <q>
                        I can't thank OneCode enough! Just out of college,
                        I landed my dream job at Microsoft! OneCode's customer
                        support was very supportive.
                        Their blog and comments sections are heartening.
                    </q>
                </p>
                <p class="namesay"><b>MERIN</b></p>
            </div>
            <br>
            <div class="user1">
                <img id="user1png" src="index images\sam.jpg" alt="">
                <p class="txt1">
                    <q>
                        OneCode is very helpful when it
                        comes to selection
                        of jobs suiting your personality. This aspect
                        landed
                        me my current
                        job as a Sales and Marketing Manager.
                    </q>
                </p>
                <p class="namesay"><b>OLESIEKU</b></p>
            </div>
            <br>
            <div class="user1">
                <img id="user1png" src="index images\jedi.jpg" alt="">
                <p class="txt1">
                    <q>
                        I like the tone the process has taken and have
                        confidence in OneCode. They are doing something right
                        and I cannot wait for when OneCode takes over the
                        industry.
                    </q>
                </p>
                <p class="namesay"><b>TASHA</b></p>
            </div>
        </div>
    </div>
    <br>
    
<script>
$(document).ready(function () {
    $("#clickme").click(function (e) { 
        e.preventDefault();
        $(".signin-how").show(10,function(){
                $(".myfff").hide();
                $(".sayings").hide();
        }); 
    });
    $("#closeee").click(function (e) { 
        e.preventDefault();
        $(".signin-how").hide(10,function(){
                $(".myfff").show();
                $(".sayings").show();

        });
    });
});
</script>
<div class="myfff">
    <?php include "myfooter.php";
?>
</div>
</body>

</html>