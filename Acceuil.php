<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/Acceuil.css">
    <title>MovisWebSite</title>
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
          <button type="button" onclick="window.location.href='login.php';" class="btn login  ps-4 pe-4 ms-auto ">log-in</button>
          <button type="button" onclick="window.location.href='register.php';" class="btn register  ps-4 pe-4 ms-2 ">register</button>
</nav>
<div class="overlay">
</div> 
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <<div class="carousel-item active">
      <img src="pictures/the amazing spider-man.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
    </div> 
    <div class="carousel-item">
      <img src="pictures/inter.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
    </div>
     <div class="carousel-item">
      <img src="pictures/interstellar3.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
    </div> 
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="caption">
    <h6>Lorem, ipsum.</h6>
    <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit.</p>
    <button type="button"  class="btn seeMore-btn btn-lg" onclick="window.location.href='posts.php';" >Start the navigation</button>  
  </div>
  
</div>

<!-- <div class="container-fluid trending">
  <div class="row trending-titles">
    <h4 class="col-12 text-white pt-5 ps-4">Trending</h4>
   <p class="col-12 text-white ps-4">The lost movies popular movies in our community</p>
  </div>
  <div class="row d-flex flex-row ps-3">
    <img class="ms-4" src="pictures/batmans-poster.jpg" style="width: 200px; height: 210px;">
    <img class="ms-4" src="pictures/spiderman_no_way_home.jpg" style="width: 200px; height: 210px;">
    <img class="ms-4" src="pictures/poster2.jpg" style="width: 200px; height: 210px;">
    <img class="ms-4" src="pictures/poster2.jpg" style="width: 200px; height: 210px;">
    <img class="ms-4" src="pictures/poster2.jpg" style="width: 200px; height: 210px;">
  </div>
</div> -->


<footer class="bg-transparent  text-center  text-lg-start">
  <div class="text-center text-white">
    © 2020 Copyright:
    <a class="text-white" href="">Cine Master.com</a>
    <a class="text-white" href="">Made by Jawad</a>
  </div>
</footer>


<script src="Acceuil.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>