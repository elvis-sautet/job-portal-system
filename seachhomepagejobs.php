<?php
include 'homepageheader.php';
?>

    <link rel="stylesheet" href="stylesheets/jobs.css?v=<?php  echo time()  ?>">
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG" >

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
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}
$limit = 10;
$start_from = ($page-1) * $limit;


$sql = "SELECT* FROM jobpost";
            $stmt =$conn->query($sql) ;
            $total_rows = $stmt->rowCount();
            $total_pages = ceil($total_rows / $limit);


if(isset($_POST['searchjob'])){
    $search= $_POST['searchjob2'];
    $resultto = "%$search%";
    $sql = "SELECT * FROM jobpost WHERE jobname LIKE ? OR joblocation LIKE ?  OR employment_type LIKE ?  OR companyname LIKE ? LIMIT $start_from, $limit ";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$resultto,$resultto,$resultto,$resultto]);
    $postcount = $stmt->rowcount();
    if($postcount > 0){
         include 'searchbox.php';
         echo "
         <div class='messageto'>
         <h3 class='messagedisplayget'>".'<span style="color:black;font-weight:bolder;">'.$postcount.'</span>'. " Jobs Found</h3>
         </div>";

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
                        <p class="companyname"><?php echo $companyname; ?></p>
                        <span id="some" class="joblocation"><?php echo  $joblocation; ?><span style='color:gray'> | </span>
                        <span id="some"  class="employment_type"> <?php  echo $employment_type; ?>
                        <span id="some"  class="jobsalary"><span style='color:gray'> | </span><span style='font-weight:bold'>Ksh </span><?php echo $job_salary; ?></span>
                        <div class="jobsumarry"><?php echo  custom_echo($overview, 500); ?></div>
                    </div>
                </div>
                      
  <?php
    }
     

$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
        $pagLink .= "<li class='page-item'><a class='page-link' href='jobs.php?page=".$i."'>".$i."</a></li>";	
    }
echo $pagLink . "</ul>"; 


    }else {
      include 'searchbox.php';
      echo "<div class='err'>
      <h1 class='messagesrr'>".'<span style="color:black;font-weight:bolder;font-size:32px;">'.$postcount.'</span>'. " jobs found</h1>
      </div>";
      
    }
  }
?>
     



