<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/posts.css">
    <title>Posts</title>
</head>
<body>
<nav class="navbar  navbar-expand-sm navbar-dark  p-md-3">  
<div class="container-fluid">
        <a class="navbar-brand " href="Acceuil.php"><img src="pictures/Logo3.svg"></a>
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
        </div>
</div>
</nav>
<div class="row add-btn">
<button class="btn btn-danger" onclick="window.location.href='add.php';" type="button">Add post</button>    
</div>
<div class="container post bg-white">
    <div class="row post_titles">
        <h4 class="col-12">Jawad Doufare</h4>
        <p class="col-12">12-12-2020</p>
    </div>
    <div class="row post_description">
        <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br> Sequi ipsam minus corporis, quo obcaecati non<br> placeat at ducimus illum laboriosam.</p>
    </div>
    <div class="row post_comments">
        <img src="pictures/game-of-thrones.jpg">
    </div>
    <div class="row pt-2 justify-content-center ">
    <button type="button" class="btn btn-danger col-4">Edit.</button>
    <button type="button" class="btn btn-danger ms-2 col-3">Comments</button>
    <button type="button" class="btn btn-danger ms-2 col-4">Delete</button>
    </div>
    <div class="row comments">
    <p class="col-12">Comments</p>
    <input type="password" class="ms-3 col-9" >
    <button type="submit" class="btn btn-danger ms-3 col-2">Send</button>
    <p></p>
   </div>
</div>
<footer class="bg-black text-center mt-4 text-lg-start">
 
  <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="">Cine Master.com</a>
    <a class="text-white" href="">Made by Jawad</a>
  </div>
  
</footer>
<script src="https://kit.fontawesome.com/f694c8cce8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>