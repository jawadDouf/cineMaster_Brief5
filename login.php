<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Log-in</title>
    <link rel="stylesheet" href="./style/login.css">
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
              <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item ms-1">
              <a class="nav-link text-white" href="#">Posts</a>
            </li>
            
            
            
          </ul>
          <button type="button" onclick="window.location.href='register.php';"  class="btn register btn-danger ps-4 pe-4 ms-auto">register</button>
        </div>
      </div>
    </nav> 
    <div class="container">
    
        <div class="row d-flex flex-column formTitles">
         <p class= "mb-0">Welcome back</p>
         <h3 class= "mb-2"><span>Enter Your Informations</span><span id = "point">.</span></h3>   
         <p><span>Don't have an account? </span><a href="register.php">Register</a></p>
        </div>
        <form class = "form">
        <div class="row">
        <input type="email" class="form_elem col-md col-sm-12 col-lg" name="email" placeholder="Enter Email">
        </div>
        <div class= "row">
        <input type="Password" class="form_elem col-md col-sm-12 col-lg" name="password" placeholder="Enter Password"> 
        </div>
        <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label text-white" for="inlineCheckbox1">Remember me</label>
         </div>
        <div class="row">
        <button class="btn btn-danger form_elem col mt-3 " type="button">Log-in</button>
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





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>