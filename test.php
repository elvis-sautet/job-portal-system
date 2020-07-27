<!-- <?php
include "includes\companysessions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>

    <?php
    $companyid = $user['id'];
    $sqlprofile = "SELECT *  FROM jobpost WHERE company_id=$companyid ";
    $result = $conn->query($sqlprofile);
    $resultcount = $result->rowcount();
    if($resultcount > 0 ){
        ?>

  <span class="#">success</span>

    <?php
    }else{
        ?>
    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="post a job first!"> jobsss</a></li>

    <?php
    }
      ?>
<script type="text/javascript">
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("job").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "test.php", true);
  xhttp.send();
}
loadDoc();
</script>
</body>

</html> -->