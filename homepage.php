<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--remember to include the sessions in this page-->
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
    <link rel="stylesheet" href="homepage.css?v=<?php echo time() ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="social">
        <div class="icons">
            <!-- Add font awesome icons -->
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
    </div>
    <!-- the header for for the home page after one log ins-->
    <div id="nav-header">
        <ul id="credentials">
            <li id="logo"><a href="#"><img class="img" src="index images\mylogo for (2).PNG" alt=""></a>
            </li>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"></a>
                <a class="dropdown-item" href="#"><i class="fas fa-file"></i> Resume upload</a>
                <a class="dropdown-item" href="#"><i class="fas fa-users-cog"></i> settings</a>
                <form action="includes/logout.php" method="POST">
                    <button type="submit" name="logout"> LOGOUT</a></button>
                </form>
            </div>
            <li data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="link"><a href="#"><i
                        id="iconstart" class="fas fa-user"></i>User</a>
            </li>
            <li class="link"><a href="students.php"><i  id="iconstart2" class="fas fa-user-graduate"></i></i>Students</a>
            </li>

        </ul>
    </div>

  
    <div class="search">
        <div class="searchbox">
            <form action="#" method="post">

                <input type="text" name="searchjob" placeholder="search jobs" >
               <button class="searching" type="submit" name="search-job"><i id="searching" class="fas fa-search" ></i></button> 
            </form>

        </div>
    </div>

</body>

</html>