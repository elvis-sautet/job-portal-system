<link rel="stylesheet" href="stylesheets/homepage.css?v=<?php echo time()  ?>">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
function customizeddata_echo($row, $length){
    if(strlen( $row)<=$length){
        echo  $row;
    }else{
        $y=substr( $row,0,$length) . '  ...';
        echo $y;
    } 
    
}
?>
<?php
date_default_timezone_set('Africa/Nairobi');  

function facebook_time_ago($timestamp)  
 {  
      $time_ago = strtotime(date($timestamp));  
      $current_time = strtotime(date("Y:m:d h:i:s"));  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
      if($seconds <= 60)  
      {  
     return "Just Now";  
   }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
       return "one minute ago";  
     }  
     else  
           {  
       return "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
       return "an hour ago";  
     }  
           else  
           {  
       return "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
       return "yesterday";  
     }  
           else  
           {  
       return "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       return "a week ago";  
     }  
           else  
           {  
       return "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       return "a month ago";  
     }  
           else  
           {  
       return "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       return "one year ago";  
     }  
           else  
           {  
       return "$years years ago";  
     }  
   }  
 }  
 ?>  
<?php
include "includes/session.php";
$logged = $user['id'];
$sqlfetch = "SELECT * FROM jobapplicantion WHERE applicant_id = $logged and Message IS NOT NULL ORDER BY id DESC";
$stmt = $conn->query($sqlfetch);
$rowcount=$stmt->rowcount();

if($rowcount>0){
    
    while($rows = $stmt->fetch()){
    $company= $rows->companyname;
    $jname =  $rows->Jobname;
    $cmessage= $rows->Message;
    $mesoid= $rows->id;
    $timestamp  = $rows->messagedate;
  date_default_timezone_set('Africa/Nairobi');  
?>

<div class="mesasgesde"><a href="#?Vgn123onecode=<?php echo  $mesoid    ?>" class="notifi">
    <div class="themsg">
<?php

$sqlprofile = "SELECT * FROM companyregistration where companyName = ?";
$stmtprofile = $conn->prepare($sqlprofile);
$stmtprofile->execute([$company]);
$profiles = $stmtprofile->rowcount();
if($profiles>0){
  while($profiles=$stmtprofile->fetch()){
    $companyprofile=$profiles->companyprofile;
    if($companyprofile == NULL){
?>
      <span class="profileimgto">
        <img src="index images\240_F_325131381_5RbWS5PR0WUAR13Ao6IUZYISixWkQukM.jpg" alt="">
        </span>

<?php
    }else{   
?>
      <span class="profileimgto"><img src="profiles/<?php echo $companyprofile?>?<?php mt_rand()?>" ></span>

<?php
    }
  }
}
?>

        <span class="cname"><span class="inn">Company:</span> <?php echo $company ?></span> <br>
        <span class="jname"><span class="innn">Job Name: </span><?php echo $jname    ?></span> <br>
      <span class="cmessage" style="color:#996600"><span class="innn"></span><?php echo  $cmessage   ?></span> <br> 
        <div class="dpo">
        <span class="dateposteddt"><span class="dateposted"></span><?php  echo facebook_time_ago($timestamp)  ?></span>
        </div>
    </div></a>
</div>
<?php

    }
}else{
  echo "0 notifications found";
}


?>