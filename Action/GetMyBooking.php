<?php
session_start();
require_once './Connect.php';

$action=$_POST['op'];
if($action==1){
    echo " <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
  echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>";
  
$data=mysqli_query($conect,"select dish_name,dish_details,dish_imagename,total_price,booking_date,quantity,id from dish ,order_master where p_id=dish_id and payment_status='unpaid'");
echo "<table class='table table-hover'><tr><th>Dish Name</th><th>Dish Image</th><th>Date</th><th>Price</th><th>Accept</th></tr>";
while($row=  mysqli_fetch_row($data)){
   echo "<tr>";
    echo"<td>".$row[0]."</td>";
   echo"<td><img src='upload/".$row[2]."' width='100px' height='100px'/></td>";
   echo"<td>".$row[4]."</td>";
   echo"<td>".$row[3]."</td>";
   echo"<td><button onclick='acceptOrder(".$row[6].")'>Accept</button></td>";
  
  echo"<td> </td>";
   echo"</tr>";
}
echo"</table>";
}



//$action=$_POST['op'];
if($action==2){
    echo " <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
  echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>";
  
$data=mysqli_query($conect,"select dish_name,dish_details,dish_imagename,total_price,booking_date,quantity from dish ,order_master where p_id=dish_id and user_id=".$_SESSION["user_id"]);
echo "<table class='table table-hover'><tr><th>Dish Name</th><th>Dish Image</th><th>Date</th><th>Price</th></tr>";
while($row=  mysqli_fetch_row($data)){
   echo "<tr>";
    echo"<td>".$row[0]."</td>";
   echo"<td><img src='upload/".$row[2]."' width='100px' height='100px'/></td>";
   echo"<td>".$row[4]."</td>";
   echo"<td>".$row[3]."</td>";
  
  //echo"<td><a  onclick='getcategory(".$row[0].")' class='btn btn-warning btn-lg' data-toggle='modal' data-target='#updatemodel'>Update</a></td>";
   echo"</tr>";
}
echo"</table>";
}

if($action==3){
    

$update = $conect->query("update order_master set payment_status='paid',order_status='done' where id=".$_POST["id"]);
            if($update){
                //  header("location:../ViewBookin.php#booking");
                //$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                 echo "Error:<br>".$conect->error;    
                //$statusMsg = "File upload failed, please try again.";
            }
}


?>