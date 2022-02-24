<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URLROOT;?>/css/register.css">
    <title>MovisWebSite</title>
</head>
<body>
  <?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="container">
      <div class="row formTitles">
       <?php flash('register_success'); ?> 
       <p class= "mb-0">Start For Free</p>
       <h3 class= "mb-2 "><span>Creat new account </span><span id = "point">.</span></h3>   
       <p class="col-12-md"><span>Already A member? </span><a href="login.php">Log-in</a></p>
      </div>
    <form class="form mt-8" action="<?php echo URLROOT; ?>/users/register" method="post">
    <div class="row">
          <input type="text" class="form_elem  col-md col-sm-12 col-lg <?php echo (!empty($data['first_name_err'])) ? 'is-invalid' : ''; ?>" name="first_name" placeholder="First Name" value="<?php echo $data['first_name']; ?>">
          <span class="invalid-feedback"><?php echo $data['first_name_err']; ?></span>
          <input type="text" class="form_elem col-md col-sm-12 col-lg <?php echo (!empty($data['last_name_err'])) ? 'is-invalid' : ''; ?>"  name="last_name" placeholder="Second Name" value="<?php echo $data['last_name']; ?>">
          <span class="invalid-feedback"><?php echo $data['last_name_err']; ?></span>
      </div>
    <div class="row">
          <input type="email" class="form_elem col-md col-sm-12 col-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" name="email" placeholder="Enter Email" value="<?php echo $data['email']; ?>">
          <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          <input type="Password" class="form_elem col-md col-sm-12 col-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" name="password" placeholder="Enter Password" value="<?php echo $data['password']; ?>">
          <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
    </div>
    <div class="row">
          <input type="Password" class="form_elem col-lg col-sm ?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" name="confirm_password" placeholder="Confirm Password" value="<?php echo $data['confirm_password']; ?>">
          <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
        </div>
    <div class="row">
    <input type="submit" value="Register" class="btn btn-danger form_elem col-lg col-md-12 col-sm-12 mt-3">   
    </div>
    </form>   
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>