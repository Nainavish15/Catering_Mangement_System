<?php
require_once './Connect.php';
if(isset($_POST['addcategory'])){
    $name=$_POST['dish_name'];
    if($conect-> query("insert into category (cat_name) values ('$name')")== TRUE){
           header("Location:../ViewCategory.php#category");
       }
     else {
       echo "Error:<br>".$conect->error;    
}
}



  //-------------------------------------------------------------------------------->
  
  if(isset($_POST['UpdateCategory'])){
    $name=$_POST['dish_name'];
    if($conect-> query("update  category set cat_name='".$name."' where cat_id=".$_POST['id'])== TRUE){
           header("Location:../ViewCategory.php#category");
       }
     else {
       echo "Error:<br>".$conect->error;    
}
}
?>
