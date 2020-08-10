 <!DOCTYPE html>
 <html lang="en">

 <head>

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
         integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"
         integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
     <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script> -->

     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta charset="UTF-8">
     <link rel="stylesheet" href="stylesheets/homepage.css?v=<?php echo time()  ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Jobs</title>
     <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG">

 </head>

 <body class="jobbbbs">
    <div class="sss">
    <?php
     include 'jobs.php';
    ?>
    
     
    </div>
    <?php
    include "myfooter.php";
    ?>

<!-- <script>
        $(document).ready(function () {
        
       alert( $(".sss").innerHeight());
        });
    </script> -->
 </body>

 </html>
