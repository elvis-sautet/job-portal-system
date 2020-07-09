
<head>
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
    <link rel="stylesheet" href="jobs.css?v=<?php  echo time()  ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
            require "includes/dbconnection.php";
            function custom_echo($row, $length){
              if(strlen($row)<=$length){
                echo $row;
              }else{
                $y=substr($row,0,$length) . '...';
                echo $y;
              }
              
              
            }
    $sql="SELECT id,jobname,companyname,joblocation,employment_type,job_salary,joboverview FROM  jobpost LIMIT 16 ";
    $stmt = $conn->query($sql);
    $resultcount = $stmt->rowcount();
    
        while($row = $stmt->fetch()){
            $id=$row->id;
            $jbname=$row->jobname;
            $companyname=$row->companyname;
            $joblocation=$row->joblocation;
            $employment_type=$row->employment_type;
            $job_salary=$row->job_salary;
            $overview = $row->joboverview;
?>
                <div class="jobsheader">
                    <div class="jobsin"> 
                    <a class="goto" href="jobapplication.php?companyname=<?php echo $id ?>"><p class="jobname"><?php echo $jbname; ?></p></a>
                        <p class="companyname"><?php echo  $companyname; ?></p>
                        <span id="some" class="joblocation"><?php echo  $joblocation; ?><span style='color:gray'> | </span>
                        <span id="some"  class="employment_type"> <?php  echo $employment_type; ?>
                        <span id="some"  class="jobsalary"><span style='color:gray'> | </span><span style='font-weight:bold'>Ksh </span><?php echo $job_salary; ?></span>
                        <div class="jobsumarry"><?php echo  custom_echo($overview, 500); ?></div>
                    </div>
                </div>
                  
        <?php } ?>
        <?php
        $_SESSION['companyname']=$id;
        ?>
</body>