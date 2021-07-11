<?php
include "../script_reserv.php";

$cin =mysqli_real_escape_string($db,$_SESSION['cin_id']);
$dateD=mysqli_real_escape_string($db,$_POST['dateD']);

if ($cin != "" && $dateD !=""){

$sql = "SELECT cin,dateDep FROM reserver WHERE cin = '$cin' and dateDep = '$dateD'";
   
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $cin_db = $row['cin'];
      $datedep_db = $row['dateDep'];
      $count = mysqli_num_rows($result);
      $data[]=$row['dateDep'];

    if($count > 0){
    $data[]='1';     
echo json_encode($data);
      
            
       
    }else{
        echo 0;
    }

}
