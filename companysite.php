<?php
include "includes/companysessions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylesheets/company.jobpost.css?v=<?php echo time()?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>company</title>
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG">

</head>

<body class="companysitee">
    <?php
    include "companyheader.php";
    ?>
    <main class="csite">
        <div class="welcome">
            <div class="welcome-note">
                <p>Welcome <span style="color:#FF4500;font-weight:bold;"><?php echo $user['companyName']?></span> to
                    One<span style="color:#6CB4EE;" class="code">Code</span>. </p>
                <p>Inneed of a developer🤔 from One<span style="color:#6CB4EE;" class="code">Code</span>
                    <a class="link" href="#" class="clickre">Get One here😉😉!!!</a>
                </p>
            </div>
        </div>
    </main>
    <br>
    <?php
    $logged= $user['id'];
    $sql = "SELECT * FROM jobpost WHERE company_id= $logged";
    $stmt = $conn->query($sql);
    $recently = $stmt->rowcount();
    ?>


</body>

</html>