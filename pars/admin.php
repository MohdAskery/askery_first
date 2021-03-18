<?php include 'connection.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" data-toggle="collapse" href="#collapseExample">Add Category</a>
      <a class="nav-item nav-link" href="#">Add Thread</a>
      <a class="nav-item nav-link" href="#">Add user</a>
      <a class="nav-item nav-link" href="#">delete comment</a>
    </div>
  </div>
</nav>


<?php

if(isset($_GET['category_add']) && $_GET['category_add']=="true"){
  echo '<div class="alert alert-success my-0  alert-dismissible fade show" role="alert">
         <strong>Success!</strong> Your category is added
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
    </div>';
}

if(isset($_GET['delete_cat']) && $_GET['delete_cat']=="true"){
  echo '<div class="alert alert-success my-0  alert-dismissible fade show" role="alert">
         <strong>Success!</strong> Your category is Delete sucessfully
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
    </div>';
}
?>

<div class="jumbotron jumbotron-fluid my-0">
  <div class="container my-0">
    <h1 class="display-6">Tech Ah Ideas</h1>
    <p class="lead">Admin pannel of Tech Ah Ideas</p>
  </div>
</div>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
   <?php include 'first-1-form.php'; ?>
  </div>
</div>

<div class="contaier" id="home">

        <div class="row my-4">

            <?php


        $sql = "SELECT * FROM `categorys`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
        //  echo $row['category_id'];
        //  echo $row['category_name'];
        $id=$row['category_id'];
        $cat=$row['category_name'];
        $desc=$row['category_description'];
        echo '<div class="col-md-4 my-2">
          <div class="card" style="width: 18rem;">
                  <div class="card-body">
                   <h5 class="card-title"><a href="#">'. $cat .'</a></h5>
                    <p class="card-text">'. substr($desc,0,90) .'...</p>
                 <a href="delete_category.php?catid='. $id .'" class="btn btn-primary" id="delete_btn"> Delete</a>
          </div>
      </div>
  </div>';
      }



      ?>

        </div>
    </div>


</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
    document.getElementById("delete_btn").addEventListener("click", function(event){
      let cn=confirm("Are you sure!");
    });
    
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
