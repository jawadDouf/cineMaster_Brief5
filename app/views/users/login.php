<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URLROOT;?>/css/login.css">
    <title>MovisWebSite</title>
</head>
<body>
  <?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="container">
        <div class="row d-flex flex-column formTitles">
         <p class= "mb-0">Welcome back</p>
         <h3 class= "mb-2"><span>Enter Your Informations</span><span id = "point">.</span></h3>   
         <p><span>Don't have an account? </span><a href="register.php">Register</a></p>
        </div>
        <form class = "form" action="<?php echo URLROOT; ?>/users/login" method="post" enctype="multipart/form-data">
        <div class="row">
        <input type="email" class="form_elem col-md col-sm-12 col-lg-10 <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"  name="email" value="<?php echo $data['email']; ?>" placeholder="Enter Email">
        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>
        <div class= "row">
        <input type="Password" class="form_elem col-md col-sm-12 col-lg-10 <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" name="password" placeholder="Enter Password" value="<?php echo $data['password']; ?>"> 
        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>  
      </div>
        <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label text-white" for="inlineCheckbox1">Remember me</label>
         </div>
        <div class="row">
        
        <input type="submit" value="Log-in" class="btn btn-danger form_elem col mt-3 col-lg-10">
        </div>
        </form>
    </div>

 
<?php require APPROOT . '/views/inc/footer.php'; ?>