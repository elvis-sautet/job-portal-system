<?php
include "includes\companysessions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/notfound.css?v=<?php  echo time()  ?>">
    <title>Document</title>
</head>

<body class="processphp">
<?php
include "companyheader.php";
    ?>
    <div class="receipt">
        <div class="ppp">
            <h3>POSTING PROCESS</h3>
            <p>Posting a job to our site requires one to read and follow simple steps like: </p>
            <ul>
                <li>Ensure to revisit your job posting before submitting the post.</li>
                <li>The subscribed limit which you choose will be charged from your account to enable the job be listed
                    in the site.
                    <p>We charge per subscriptions which may include <span>weekly or even monthly</span>
                    </p>
                </li>
                <li>In-case of in need of assistance please visit <a class="dev"
                        href="mailto:sautetelvis4148@gmail.com">Developer</a></li>
            </ul>
        </div>
    </div>
    <br>
    <div class="allplans">
        <div class="plans">
        <a class="chosed" href="companyjobpost">    <div class="fist">
                <h2>limited</h2>
                <p class="cashd">$3 / week per job</p>
                <p>free 5 day trial</p>
                <div class="lstngs">
                    <p class="listings"><i class="fas fa-check"></i> Notifications</p>
                    <p class="listings"><i class="fas fa-check"></i> Featured Jobs</p>
                    <p class="listings"><i class="fas fa-check"></i> Featured Company</p>
                </div></a>
            </div>
        </div>
        <br>
        <div class="plans" id="plnms">
        <a class="chosed" href="companyjobpost">  <div class="fist">
                <h2>Brilliant</h2>
                <p class="cashd">$5 / month per job</p>
                <p>free 5 day trial</p>
                <div class="lstngs">
                    <p class="listings"><i class="fas fa-check"></i> Notifications </p>
                    <p class="listings"><i class="fas fa-check"></i>Featured Jobs </p>
                    <p class="listings"><i class="fas fa-check"></i> Featured Company</p>
                </div></a>

            </div>
        </div>
        <br>
        <div class="plans" >
           <a class="chosed" href="companyjobpost"> <div class="fist">
                <h2>Basic</h2>
                <p class="cashd">$1 / day per job</p>
                <p>free 5 day trial</p>
                <div class="lstngs">
                    <p class="listings"><i class="fas fa-check"></i> Notifications</p>
                    <p class="listings"><i class="fas fa-check"></i> Featured Jobs</p>
                    <p class="listings"><i class="fas fa-check"></i> Featured Company</p>
                </div></a>
            </div>

        </div>
    </div>
    <?php
include "myfooter.php";
    ?>
</body>

</html>