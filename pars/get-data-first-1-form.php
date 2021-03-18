<?php 
if($_SERVER["REQUEST_METHOD"]=='POST'){
   include 'connection.php';
   $category_name=$_POST['category_name'];
   $category_description=$_POST['category_description'];
   if(!$category_description=="" && !$category_name=="")
   {
       $sql="INSERT INTO `categorys` (`category_name`, `category_description`) VALUES ('$category_name', '$category_description')";
       $result=mysqli_query($conn,$sql);
       if($result){
           header("Location: /disc/pars/admin.php?category_add=true");
       }
       else{
           header("Location: /disc/pars/admin.php?category_add=false");
       }
   }
   else{
        header("Location: /disc/pars/admin.php?category_add=false");


   }
}
else{
    echo "some server problem";
}











// INSERT INTO `categorys` (`category_id`, `category_name`, `category_description`, `created`) VALUES (NULL, 'php', 'php is programming', current_timestamp());


?>