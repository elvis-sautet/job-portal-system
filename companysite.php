<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello <?php echo $_SESSION['companyname']  ?> </p>
    <form action="includes/logout.php" method="post">
    <button class="logout">Logout</button>
    </form>
</body>
</html>