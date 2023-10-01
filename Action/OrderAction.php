<?php
require_once './Connect.php';
if(isset($_POST["booking"])){
$user_id=$_POST["user_id"];
$p_id=$_POST["p_id"];
$total_price=$_POST["total_price"];
$booking_date=$_POST["booking_date"];
$SQL="INSERT into order master (user_id,p_id,total_price,booking_date) VALUES ('$user_id',$p_id','$total_price',$booking_date,')";
}
if($conect-> query($SQL)== TRUE){
   
       }
        else {
       echo "Error:".$SQL."<br>".$conect->error;    
   }
?>