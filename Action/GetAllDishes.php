<?php
require_once './Connect.php';
$action=$_POST['op'];
if($action==1){
    echo " <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
  echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>";

$data=mysqli_query($conect,"select * from dish where dish_status='avail' ");
echo "<table class='table table-hover'><tr><th>Dish Name</th><th>Dish Details</th><th>Dish Price</th><th>Dish Image</th><th>Update</th><th>Remove</th></tr>";
while($row=  mysqli_fetch_row($data)){
   echo "<tr>";
   echo"<td>".$row[1]."</td>";
   echo"<td>".$row[2]."</td>";
   echo"<td>".$row[3]."</td>";
   echo"<td><img src='upload/".$row[4]."' width='50px' height='50px'/></td>";
   echo"<td><a <a onclick='disableDishes(".$row[0].")' class='btn btn-danger btn-lg'>Disable</a></td>";
   echo"<td><a  onclick='getDishes(".$row[0].")' class='btn btn-warning btn-lg' data-toggle='modal' data-target='#updatemodel'>Update</a></td>";
   echo"</tr>";
}
echo"</table>";
}

if($action==6){
    echo " <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
  echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>";

$data=mysqli_query($conect,"select * from dish where dish_status='avail' and dish_category=".$_POST["id"]);
echo "<table class='table table-hover'><tr><th>Dish Name</th><th>Dish Details</th><th>Dish Price</th><th>Dish Image</th><th>Update</th><th>Remove</th></tr>";
while($row=  mysqli_fetch_row($data)){
   echo "<tr>";
   echo"<td>".$row[1]."</td>";
   echo"<td>".$row[2]."</td>";
   echo"<td>".$row[3]."</td>";
   echo"<td><img src='upload/".$row[4]."' width='50px' height='50px'/></td>";
   echo"<td><a <a onclick='disableDishes(".$row[0].")' class='btn btn-danger btn-lg'>Disable</a></td>";
   echo"<td><a  onclick='getDishes(".$row[0].")' class='btn btn-warning btn-lg' data-toggle='modal' data-target='#updatemodel'>Update</a></td>";
   echo"</tr>";
}
echo"</table>";
}

if($action==2){
    $id=$_POST["id"];
    if($conect-> query("update dish set dish_status='dis' where dish_id=".$id)== TRUE){
           header("Location:../ViewDishes.php#Dish");
       }
     else {
       echo "Error:".$SQL."<br>".$conect->error;
}
}

if($action==3){
   
$data=mysqli_query($conect,"select * from dish where dish_id=".$_POST['id']);
//echo "<table class='table table-hover'><tr><th>Dish Name</th><th>Dish Details</th><th>Dish Price</th><th>Dish Image</th><th>Update</th><th>Remove</th></tr>";
while($row=  mysqli_fetch_row($data)){
 echo "<div class='form-group'><label for='dish_name'>Enter Dish Name</label><input type='hidden' value='".$row[0]."' name='id'><input  value='".$row[1]."'name='dish_name' id='dis_name' class='form-control'></div>";
 echo "<div class='form-group'><label for='Details'>Enter Dish Details</label><input value='".$row[2]."' name='dish_details' id='dish_details' class='form-control'></div>";
 echo "<div class='form-group'><label for='dish_Price'>Enter Dish Price</label><input  value='".$row[3]."' name='dish_price' id='dis_price' class='form-control'></div>";
 echo "<div class='form-group'><label for='dishimg'>Select Image</label><input type='file' value='".$row[4]."' name='file' id='dis_price' class='form-control'></div>";
 echo "<div class='form-group'><label for='dishcat'>Choose Dish Category</label><select name='category' id='categoryop' class='form-group'>";
 echo "<option value='".$row[5]."'>Previous</option></select></div>";
 echo "<div class='form-group'><input type='submit' value='updatedish'  class='form-control' name='updatedish'/></div>";
    
    
}

}


if($action==4){
   
    echo " <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
  echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>";
 $data=mysqli_query($conect,"select * from dish where dish_status='avail'");
 // echo "<div class='form-group'><label for='dishcat'>Select Dish Category</label><select name='category' id='categoryop' class='form-group'>";
  //echo "<option value='".$row[5]."'>Select Category</option></select></div>";

//echo "<table class='table table-hover'><tr><th>Dish Name</th><th>Dish Details</th><th>Dish Price</th><th>Dish Image</th><th>Update</th><th>Remove</th></tr>";
while($row=  mysqli_fetch_row($data)){
    
   echo "<div class='col-md-4' style='margin-bottom:5%;'>";
  // echo"<td>".$row[1]."</td>";
   //echo"<td>".$row[2]."</td>";
   //echo"<td>".$row[3]."</td>";
   echo"<img src='upload/".$row[4]."' width='100%' height='200px' class='img'/><br><br>";
   echo"<button onclick='disableDishes(".$row[0].")' class='btn btn-success btn-lg' style='width:50%'>Booking Dish</button>";
   echo"<button onclick='getDetails(".$row[0].")' class='btn btn-info btn-lg' style='width:50%' data-toggle='modal' data-target='#updatemodel'>View Details</button>";
   echo"</div>";
   
}

}

if($action==7){
   
    echo " <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
  echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>";
 $data=mysqli_query($conect,"select * from dish where dish_status='avail' and dish_category=".$_POST["id"]);
 // echo "<div class='form-group'><label for='dishcat'>Select Dish Category</label><select name='category' id='categoryop' class='form-group'>";
  //echo "<option value='".$row[5]."'>Select Category</option></select></div>";

//echo "<table class='table table-hover'><tr><th>Dish Name</th><th>Dish Details</th><th>Dish Price</th><th>Dish Image</th><th>Update</th><th>Remove</th></tr>";
while($row=  mysqli_fetch_row($data)){
    
   echo "<div class='col-md-4' style='margin-bottom:5%;'>";
  // echo"<td>".$row[1]."</td>";
   //echo"<td>".$row[2]."</td>";
   //echo"<td>".$row[3]."</td>";
   echo"<img src='upload/".$row[4]."' width='100%' height='200px' class='img'/><br><br>";
   echo"<button onclick='disableDishes(".$row[0].")' class='btn btn-success btn-lg' style='width:50%'>Booking Dish</button>";
   echo"<button onclick='getDetails(".$row[0].")' class='btn btn-info btn-lg' style='width:50%' data-toggle='modal' data-target='#updatemodel'>View Details</button>";
   echo"</div>";
   
}

}


if($action==5){
   
$data=mysqli_query($conect,"select * from dish where dish_id=".$_POST['id']);
//echo "<table class='table table-hover'><tr><th>Dish Name</th><th>Dish Details</th><th>Dish Price</th><th>Dish Image</th><th>Update</th><th>Remove</th></tr>";
while($row=  mysqli_fetch_row($data)){
 echo "<form action='Action/BookingAction.php' method='post'><div class='form-group'><div ><img  style='height:200px;' src='upload/".$row[4]."' width='100%' class='img img-thumbnail'/></div></div>";
 
 echo "<div class='form-group'><label for='dish_name'>Dish Name</label>:&nbsp&nbsp&nbsp<label for='dish_name'>".$row[1]."</label></div>";
 echo "<div class='form-group'><label for='dish_name'>Dish Price</label>:&nbsp&nbsp&nbsp<input type='hidden' name='prize' value='".$row[3]."'><label for='dish_name'>".$row[3]."</label></div>";
 echo "<div class='form-group'><label for='dish_name'>Dish Details</label>:&nbsp&nbsp&nbsp<label for='dish_name'>".$row[2]."</label></div>";
 echo "<div class='form-group'><label for='dish_name'>Booking Date</label> <input type='date' name='booking_date'/></div>";
 echo "<div class='form-group'><label for='dish_name'>Quantity</label> <input type='hidden' name='p_id' value='".$row[0]."' /> <input type='text' name='quantity'  /></div>";
  echo "<div class='form-group'><input type='submit' name='Booking' value='Booking' class='btn btn-success' /></div></form>";
    
    
}

}


?>