<?php 
include "includes/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--remember to include the sessions in this page-->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheets/homepage.css?v=<?php echo time()  ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body class="jobbbbs">
    <!--the header-->
    <?php
     $sqlprofile = "SELECT profileimage  FROM job_seeker_registration WHERE id=$user[id]";
     $result = $conn->query($sqlprofile);
     $resultcount = $result->rowcount();
     if($resultcount>0){
         while($row=$result->fetch()){
             $image = $row->profileimage;
             if($image == NULL){
                 ?>
    <div class="navgation">
        <div class="header">
            <div class="logo"><a href="homepage"><img id="mylogo" src="index images\mylogo for (2).PNG" alt="logo"></a>
            </div>
            <ul class="main">
                <li><a href="homepage">Jobs</a></li>
                <li class="not"><a href="#"><i class="fas fa-bell" style="color:black"></i></a></li>

                <li><a href="#"><img src="profiles/mainpic.png" class='profle'></img> user</a>
                    <ul>
                        <li><a href="#"><?php echo $user['firstname'];  ?></a></li>
                        <li><a href="careerprofile">Career</a></li>

                        <li>
                            <form action="includes/logout.php" method="post">
                                <a href="#"><button id="logout" type="submit" name="logout"><i
                                            class="fas fa-sign-out-alt"></i> logout</button></a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    <?php

             }else{
?>
    <div class="navgation">
        <div class="header">
            <div class="logo"><a href="homepage"><img id="mylogo" src="index images\mylogo for (2).PNG" alt="logo"></a>
            </div>
            <ul class="main">
                <li><a href="homepage">Jobs</a></li>
                <li class="not"><a href="#"><i class="fas fa-bell" style="color:black" title="Notifications"></i></a></li>

                <li><a href="#"><img src="profiles/<?php echo $image?>?<?php mt_rand()?>" class='profle'></img> user</a>
                    <ul>
                        <li><a href="#"><?php echo $user['firstname'];  ?></a></li>
                        <li><a href="careerprofile">Career</a></li>

                        <li>
                            <form action="includes/logout.php" method="post">
                                <a href="#"><button id="logout" type="submit" name="logout"><i
                                            class="fas fa-sign-out-alt"></i> logout</button></a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    <?php
             }
         }
     }else{
         echo "SQL ERROR";
     }
    ?>
    <main >
        <div class="notificationspushover">
            <div class="he">
                <span>Notifications</span>
               
            </div>

            <div class="notificationspush">
            </div>
        </div>
 
    </main> 
    <script>
    $(document).ready(function() {
        setInterval(function() {
            $(".notificationspush").load("loadernotification.php");
        }, 3000);
        $(".not").click(function(e) {
            e.preventDefault();
            $(".notificationspushover").fadeToggle("fast").css({
                "position": "fixed"
            });
            
        });
       
    });
    </script>


</body>