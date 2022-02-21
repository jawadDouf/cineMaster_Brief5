<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/register.css">
    <title>Register</title>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-sm navbar-dark p-md-3">  
<div class="container-fluid">
        <a class="navbar-brand mb-2" href="Acceuil.php"><img src="pictures/Logo3.svg"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span> 
        </button> 

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto ps-5">
            <li class="nav-item ms-2">
              <a class="nav-link text-white" href="Acceuil.php">Home</a>
            </li>
            <li class="nav-item ms-1">
              <a class="nav-link text-white" href="posts.php">Posts</a>
            </li>
            
            
            
          </ul>
          <button type="button" onclick="window.location.href='login.php';"  class="btn login btn-danger ps-4 pe-4 ms-auto ">log-in</button>
       </nav> 
    </div>
       
    </div>
    <div class="container">
      <div class="row formTitles">
       <p class= "mb-0">Start For Free</p>
       <h3 class= "mb-2 "><span>Creat new account </span><span id = "point">.</span></h3>   
       <p class="col-12-md"><span>Already A member? </span><a href="login.php">Log-in</a></p>
      </div>
    <form class="form mt-8">
    <div class="row">
          <input type="text" class="form_elem  col-md col-sm-12 col-lg" name="firstName" placeholder="First Name">
          <input type="text" class="form_elem col-md col-sm-12 col-lg" name="LastName" placeholder="Second Name">
    </div>
    <div class="row">
          <input type="email" class="form_elem col-md col-sm-12 col-lg" name="email" placeholder="Enter Email">
          <input type="Password" class="form_elem col-md col-sm-12 col-lg" name="password" placeholder="Enter Password">
    </div>
    <div class="row">
          <input type="Password" class="form_elem col-lg col-sm" name="confirm_password" placeholder="Confirm Password">
    </div>
    <div class="row">
       <button class="btn btn-danger form_elem col-lg col-md-12 col-sm-12 mt-3" type="button">Register</button>
    </div>
    </form>   
    </div>
    
   
    
  <footer class="bg-transparent  text-center  text-lg-start">
  <div class="text-center text-white">
    © 2020 Copyright:
    <a class="text-white" href="">Cine Master.com</a>
    <a class="text-white" href="">Made by Jawad</a>
  </div>
  </footer>






<script src="register.js"></script>
<script src="https://kit.fontawesome.com/f694c8cce8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk8Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO8LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>