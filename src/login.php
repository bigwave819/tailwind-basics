<?php
include('connection.php');
//
    $sql="SELECT * FROM users";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
        $email= $row['email'];
        $name= $row['Name'];
        $password=$row['password'];
        // echo $email.$name.$password;
        if (isset($_GET['submit'])) {
            $nam=$_GET['username'];
            $emal=$_GET['Email'];
            $passwrd=$_GET['password']; 
            if ($nam==$name) {
                if($emal==$email){
                    if($password==$passwrd){
                        header("location:index.html");
                    }else{
                        echo "incorrect password";
                    }
                }
                else{
                    echo "incorrect email";
                }
                
            }
            else{
                echo "incorrect username";
            }
            
              }
        else {
    
             echo "false";
                }
}
    }
//  
?>