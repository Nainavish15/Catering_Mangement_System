
<?php
require_once ("./Connect.php");
$action=$_POST['op'];
if($action==1){
  // echo "fhgfhgj";
  echo " <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
  echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>";
  
$data=mysqli_query($conect,"select * from category where cat_status='avail'");
echo "<html><table class='table table-hover'><tr><th>Name</th><th>Remove</th><th>Update</th></tr></html>";
while($row=  mysqli_fetch_row($data)){
   echo "<tr>";
   echo"<td>".$row[1]."</td>";
   echo"<td><a onclick=disableCategory(".$row[0].")>Disable</a></td>";
  echo"<td><a  onclick='getcategory(".$row[0].")' class='btn btn-warning btn-lg' data-toggle='modal' data-target='#updatemodel'>Update</a></td>";
   echo"</tr>";
}
echo"</table>";
}
if($action==2){
    $id=$_POST["id"];
    if($conect-> query("update category set cat_status='dis' where cat_id=".$id)== TRUE){
           header("Location:../ViewCategory.php#category");
       }
     else {
       echo "Error:".$SQL."<br>".$conect->error;
}

}


if($action==3){
$data=mysqli_query($conect,"select * from category where cat_id=".$_POST['id']);

while($row=  mysqli_fetch_row($data)){
   echo $row[1];
   
}

}


if($action==4){
$data=mysqli_query($conect,"select * from category where cat_status='avail'");
echo "<option>select </option>";
while($row=  mysqli_fetch_row($data)){
   echo "<option value='".$row[0]."'>".$row[1]."</option>";
   
}

}



 ?>