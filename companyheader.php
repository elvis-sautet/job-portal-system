<!DOCTYPE html>
<html lang="en">
<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/homepage.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <!--the header-->
    <div class="navgation">
        <div class="header">
            <div class="logo"><a href="companysite.php"><img id="mylogo" src="index images\mylogo for (2).PNG" alt="logo"></a></div>
            <ul class="main">
                <li><a href="#"><i class="fas fa-user"> </i> User</a>
                    <ul>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Reviews</a></li>

                        <li>
                            <form action="includes/logout.php" method="post">
                              <a href="#"><button id="logout" type="submit" name="logout"><i class="fas fa-sign-out-alt"></i> logout</button></a> 
                            </form>
                        </li>
                    </ul>
                </li>
                <li><a href="company.jobpost.php"><i class="far fa-building"></i> Post job</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>