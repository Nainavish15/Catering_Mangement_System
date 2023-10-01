<?php
session_start();
require_once './Connect.php';
$targetDir = "../profile/";
if(isset($_POST["singup"]) && !empty($_FILES["file"]["name"])){
     $ad_name= $_POST["admin_name"];
       $ad_pass= $_POST["admin_pass"];
       $ad_email= $_POST["admin_Email"];
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
     $data = $conect->query("INSERT into user_info(admin_name,admin_password,admin_email,admin_image)  VALUES ('$ad_name','$ad_pass','$ad_email','".$fileName."')");
            if($data){
                header("Location:../index.php#awards");
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


 
   
   if(isset($_POST["SignIn"])){
       
    $email= $_POST["admin_Email"];
    $pass= $_POST["admin_pass"];
    $SQL="select * from user_info where admin_email='$email' and admin_password='$pass'";
    $data=  mysqli_query($conect,$SQL);
    if($row=mysqli_fetch_row($data)){
        $_SESSION['user_type']=$row[4];
        $_SESSION['user']=$row[1];
        $_SESSION['user_id']=$row[0];
        $_SESSION['user_img']=$row[5];
         header("Location:../Homepage.php");
    }
      else {
       echo "Error:".$SQL."<br>".$conect->error;    
   }
}
     
?>
