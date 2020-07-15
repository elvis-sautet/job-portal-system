<?php session_start();
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
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
    <link rel="stylesheet" href="homepage.css?v=<?php echo time()  ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="jobbbbs">
    <!--the header-->
    <div class="navgation">
        <div class="header">
            <div class="logo"><a href="homepage.php"><img id="mylogo" src="index images\mylogo for (2).PNG" alt="logo"></a></div>
            <ul class="main">
                <li><a href="#"><i class="fas fa-user"> </i><i class="fas fa-angle-down"></i></a>
                    <ul>
                        <li><a href="#"><?php echo  $_SESSION['Firstname']  ?></a></li>
                        <li><a href="usersprofileupdate1.php">Account</a></li>
                        <li><a href="#">Career</a></li>

                        <li>
                            <form action="includes/logout.php" method="post">
                              <a href="#"><button id="logout" type="submit" name="logout"><i class="fas fa-sign-out-alt"></i> logout</button></a> 
                            </form>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-user-graduate"></i> Students</a></li>
            </ul>
        </div>
    </div>



</body>