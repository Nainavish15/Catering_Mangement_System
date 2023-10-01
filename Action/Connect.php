<?php
$conect=  mysqli_connect("localhost","root","","catsys");
if($conect-> connect_error){
    die("connection failed:".$conect-> connect_error);
}
//echo 'connected successfully';
?>