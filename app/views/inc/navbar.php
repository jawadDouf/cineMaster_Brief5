<nav class="navbar fixed-top navbar-expand-sm navbar-dark p-md-3">  
<div class="container-fluid">
        <a class="navbar-brand mb-2" href="<?= URLROOT;?>/Acceuil.php"><img src="<?= URLROOT;?>/img/Logo3.svg"></a>
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
              <a class="nav-link text-white" href="<?= URLROOT;?>/pages/index">Home</a>
            </li>
            <li class="nav-item ms-1">
              <a class="nav-link text-white" href="<?= URLROOT;?>/posts/index">Posts</a>
            </li>    
          </ul>
          <?php if(isset($_SESSION['user_id'])) : ?>
          <button type="button"  class="btn login  ps-4 pe-4 ms-auto "><a style="text-decoration: none;color:white;" href="<?php echo URLROOT; ?>/users/logout">log-out</a></button>
          <?php else : ?>
          <button type="button"  class="btn login  ps-4 pe-4 ms-auto "><a style="text-decoration: none;color:white;" href="<?= URLROOT;?>/users/login">log-in</a></button>
          <button type="button"  class="btn register  ps-4 pe-4 ms-2 "><a style="text-decoration: none;color:white;" href="<?= URLROOT;?>/users/register">register</a></button>
          <?php endif; ?>
        </nav>