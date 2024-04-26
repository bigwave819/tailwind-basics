<?php
$conn=new mysqli('localhost','root','','user');
if($conn){
    // echo "connected";
    header("location:loginpage.php");
}
else{
    die(mysqli_error($conn));
}




?>