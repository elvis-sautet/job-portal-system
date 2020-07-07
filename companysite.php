<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="companysite.css?v=<?php echo time()?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "companyheader.php";
    ?>
    <div class="welcome">
        <div class="welcome-note">
        <p>Welcome <span style="color:#FF4500;font-weight:bold;"><?php echo $_SESSION['companyname'] ?></span> to One<span style="color:#6CB4EE;" class="code">Code</span> . </p>
        <p>Inneed of a developer🤔 from One<span style="color:#6CB4EE;" class="code">Code</span>
            <a class="link" href="#" class="clickre">Get One here😉😉!!!</a>
        </p>
        </div>
    </div>

</body>
</html>