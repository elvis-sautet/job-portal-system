<link rel="stylesheet" href="stylesheets/homepage.css?v=<?php echo time()  ?>">
<?php
function customizeddata_echo($cmessage, $length){
    if(strlen( $cmessage)<=$length){
        echo  $cmessage;
    }else{
        $y=substr( $cmessage,0,$length) . '  ...';
        echo $y;
    } 
    
}
function timeAgo($time_ago){
$cur_time 	= time();
$time_elapsed 	= $cur_time - $time_ago;
$seconds 	= $time_elapsed ;
$minutes 	= round($time_elapsed / 60 );
$hours 		= round($time_elapsed / 3600);
$days 		= round($time_elapsed / 86400 );
$weeks 		= round($time_elapsed / 604800);
$months 	= round($time_elapsed / 2600640 );
$years 		= round($time_elapsed / 31207680 );
// Seconds
if($seconds <= 60){
	echo "$seconds seconds ago";
}
//Minutes
else if($minutes <=60){
	if($minutes==1){
		echo "one minute ago";
	}
	else{
		echo "$minutes minutes ago";
	}
}
//Hours
else if($hours <=24){
	if($hours==1){
		echo "$hours hour ago";
	}else{
		echo "$hours hours ago";
	}
}
//Days
else if($days <= 7){
	if($days==1){
		echo "yesterday";
	}else{
		echo "$days days ago";
	}
}
//Weeks
else if($weeks <= 4.3){
	if($weeks==1){
		echo "a week ago";
	}else{
		echo "$weeks weeks ago";
	}
}
//Months
else if($months <=12){
	if($months==1){
		echo "a month ago";
	}else{
		echo "$months months ago";
	}
}
//Years
else{
	if($years==1){
		echo "one year ago";
	}else{
		echo "$years years ago";
	}
}
}

?>

<?php
include "includes/session.php";
$logged = $user['id'];
$sqlfetch = "SELECT * FROM jobapplicantion WHERE applicant_id=$logged and Message IS NOT NULL  ORDER BY id DESC";
$stmt = $conn->query($sqlfetch);
$rowcount=$stmt->rowcount();

if($rowcount>0){
    ?>
    
    <?php
    while($rows = $stmt->fetch()){
   $company= $rows->companyname;
    $jname =  $rows->Jobname;
     $cmessage= $rows->Message;
    $mesoid= $rows->id;
    $curenttime = $rows->messagedate;
    $time_ago =strtotime($curenttime);
?>

<div class="mesasgesde"><a href="#?messageto=<?php echo  $mesoid    ?>" class="notifi">
    <div class="themsg">
        <span class="cname"><span class="inn">Company:</span> <?php echo $company ?></span> <br>
        <span class="jname"><span class="innn">Job Name: </span><?php echo $jname    ?></span> <br>
        <span class="cmessage"><span class="innn">Message: </span><?php echo customizeddata_echo($cmessage,20)   ?></span> <br> 
        <div class="dpo">
        <span class="dateposteddt"><span class="dateposted"></span><?php  echo timeAgo($time_ago);  ?></span>
        </div>
    </div></a>
</div>


<?php

    }
}


?>