<?php
require_once './Connect.php';
$targetDir = "../upload/";



if(isset($_POST["insret"]) && !empty($_FILES["file"]["name"])){
    $dish_name=$_POST["dish_name"];
$dish_details=$_POST["dish_details"];
$dish_price=$_POST["dish_price"];
$dish_cat=$_POST["category"];
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
     $insert = $conect->query("INSERT into dish (dish_name,dish_details,dish_price,dish_imagename,dish_category) VALUES ('$dish_name','$dish_details',$dish_price,'".$fileName."',$dish_cat)");
            if($insert){
                header("location:../ViewDishes.php");
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                 echo "Error:<br>".$conect->error;    
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
/*---------------------------------------------------------------------*/


if(isset($_POST["updatedish"]) && !empty($_FILES["file"]["name"])){
    $dish_name=$_POST["dish_name"];
$dish_details=$_POST["dish_details"];
$dish_price=$_POST["dish_price"];
$dish_cat=$_POST["category"];
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
 $id=$_POST['id'];
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
     $insert = $conect->query("update dish set dish_name='$dish_name',dish_details='$dish_details',dish_price=$dish_price,dish_imagename='$fileName',dish_category=$dish_cat where dish_id=".$id);
            if($insert){
                header("location:../ViewDishes.php");
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                 echo "Error:<br>".$conect->error;    
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

//for update category
if(isset($_POST["updatedish"]) && empty($_FILES["file"]["name"])){
    $dish_name=$_POST["dish_name"];
    $id=$_POST['id'];
$dish_details=$_POST["dish_details"];
$dish_price=$_POST["dish_price"];
$dish_cat=$_POST["category"];
     $insert = $conect->query("update dish set dish_name='$dish_name',dish_details='$dish_details',dish_price=$dish_price,dish_category=$dish_cat where dish_id=".$id);
            if($insert){
                header("location:../ViewDishes.php");
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                 echo "Error:<br>".$conect->error;    
                $statusMsg = "File upload failed, please try again.";
            } 
}


?>