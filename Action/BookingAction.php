<?php
session_start();
require_once './Connect.php';
if(isset($_POST["Booking"])){
$user_id=$_SESSION["user_id"];
$p_id=$_POST["p_id"];
$prize=$_POST["prize"];
$quantity=$_POST["quantity"];
$total_price=$quantity*$prize;
$booking_date=$_POST["booking_date"];
$SQL="insert into order_master (user_id,p_id,total_price,booking_date,quantity) values ($user_id,$p_id,$total_price,'$booking_date',$quantity)";

if($conect-> query($SQL)== TRUE){
    header("location:../UserViewDishes.php#Dish");
       }
        else {
       echo "Error:".$SQL."<br>".$conect->error;    
   }
   }
?>
