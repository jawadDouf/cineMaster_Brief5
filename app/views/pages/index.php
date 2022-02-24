<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URLROOT;?>/css/Acceuil.css">
    <title>MovisWebSite</title>
</head>
<body>
  <?php require APPROOT . '/views/inc/navbar.php'; ?>
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
      <img src="<?= URLROOT;?>/img/the amazing spider-man.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
    </div> 
    <div class="carousel-item">
      <img src="<?= URLROOT;?>/img/inter.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
    </div>
     <div class="carousel-item">
      <img src="<?= URLROOT;?>/img/interstellar3.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
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

<?php require APPROOT . '/views/inc/footer.php'; ?>
