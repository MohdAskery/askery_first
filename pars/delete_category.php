<?php
include 'connection.php';
$id=$_GET['catid'];

$sql="DELETE FROM `categorys` WHERE category_id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location: /disc/pars/admin.php?delete_cat=true");


}
else{
    header("Location: /disc/pars/admin.php?delete_cat=false");
}
?>