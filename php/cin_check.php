<?php
include "config.php";
$cin =mysqli_real_escape_string($db,$_POST['cin']);

if ($cin != ""){

$sql = "SELECT cin FROM client WHERE cin = '$cin'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['cin'];
      $count = mysqli_num_rows($result);
     

    if($count > 0){
             $_SESSION['cin_id'] = $cin;     
echo 1;
      
            
       
    }else{
        echo 0;
    }

}
?>
