<?php
if($_SERVER["REQUEST_METHOD"]=='POST')
{
   $Error="false";
   include 'connection.php';
   $email=$_POST['signupEmail'];
   $pass=$_POST['signuppassword'];
   $cpass=$_POST['signupcpassword'];

   $extquery="select * from `user` where email='$email'";
   $result=mysqli_query($conn,$extquery);
   $numRows=mysqli_num_rows($result);
   if ($numRows>0){
       $Error="Email Is Already Exists in outr database";
   }
   else{
        
      if ($pass==$cpass){
         $hash=password_hash($pass,PASSWORD_DEFAULT);
         $sql="INSERT INTO `user` (`email`, `password`, `timestamp`) VALUES ('$email', '$hash', current_timestamp())";
         $result=mysqli_query($conn,$sql);
         if ($result){
             $showAlert=true;
             header("Location: /disc/index.php?signupsucess=true");
             exit();
         }

      }
      else{
          $Error="Password Does't match";
      }
   }
   header("LOcation: /disc/index.php?signupsucess=false&error=$Error");



}

?>