<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="/disc">coding</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="/disc">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">about us</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">contact</a>
    </li>
  </ul>
  <div class="row mx-2">';
if(isset($_SESSION['loggeduser']) && $_SESSION['loggeduser']==true){
  echo '<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>

    <div class="btn-group mx-2">
    <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    '.$_SESSION['userEmail'].'
        </button>
        <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" type="a">My Account</button>
        <a class="dropdown-item" type="a">Setting</button>
       <a href="pars/_logout.php" class="dropdown-item" type="a">Logout</a>
      </div>
    </div>
   
    <a href="pars/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
    </form>';
}
// <p class="text-light my-0 mx-2"> welcome '.$_SESSION['userEmail'].'</p>
else{
  echo '<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
     <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginmodal">Login</button>
    <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupmodal">Signup</button>';
}


echo '</div>

</div>
</nav>';
include 'pars/loginmodal.php';
include 'pars/signupmodal.php';
if(isset($_GET['signupsucess']) && $_GET['signupsucess']=="true"){
   echo '<div class="alert alert-success my-0 alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> you can Login Now
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
 



?>