<!DOCTYPE html>
<html lang="en">

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="stylesheet" href="companyheader.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="companyheader">
        <div class="header">
            <img class="logo" src="index images\mylogo for (2).PNG" alt="">
            <li class="first"><a class="links" href="#">
                    <form action="includes/logout.php" method="post">
                        <button class="logout">Logout</button>
                    </form>
                </a></li>
            <li class="first"><a class="links" href="#"><i class="fas fa-user-alt"></i></a></li>
            <li class="first"><a class="links" href="#">postjob</a></li>
            <li class="first"><a class="links" href="#">Reviews</a></li>         
        </div>
    </div>
</body>

</html>