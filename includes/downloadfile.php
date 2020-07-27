<?php
     include "dbconnection.php";
 if(isset($_GET['file'])){
   $thefile = $_GET['file'];
    $sql = "SELECT CV FROM jobapplicantion  WHERE CV = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$thefile]);
    $rowdata = $stmt->rowcount();
   while($row =$stmt ->fetch()){
       $profile = $row->CV;
    $filepath = '../uploads/'.$profile;
   if(file_exists($filepath)){
        header('Content-Type: application/octet-stream');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename="'.basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/'.$row->CV));
        readfile('../uploads/'.$row->CV);
        exit();
    }
} 
}
//  }else{
//      echo "SQL error";
//  }
