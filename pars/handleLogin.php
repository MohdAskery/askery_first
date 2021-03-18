<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=='POST'){
    include 'connection.php';
    $email=$_POST['email_login'];
    $pass=$_POST['login_pass'];
}
$sql="select * from `user` where email='$email'";
$result=mysqli_query($conn,$sql);
$numRows=mysqli_num_rows($result);
    if ($numRows==1)
    {
       $row=mysqli_fetch_assoc($result);
       if (password_verify($pass,$row['password']))
       {
          session_start();
          $_SESSION["loggeduser"]=true;
          $_SESSION["userEmail"]=$email;
          echo "logged" .$email;
          
       }
       header("Location:/disc/index.php");
    }
    else{
         $showError="Email is Already exists";
    }

?>