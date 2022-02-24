<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URLROOT;?>/css/add.css">
    <title>MovisWebSite</title>
</head>
  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="container">
      <div class="row formTitles">
       <h3 class= "mb-0"><span>Edit a post</span><span id = "point">.</span></h3>  
       <p class= "mb-3">Modify a specific Post</p>
      </div>
    <form class="form mt-8" action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="post">
  
    <div class="row">
          <input type="text" class="form_elem  col-md col-sm-12 col-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" name="title" placeholder="Title" value="<?php echo $data['title'] ?>">
          <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
          <input type="text" class="form_elem col-md col-sm-12 col-lg <?php echo (!empty($data['movieName_err'])) ? 'is-invalid' : ''; ?>" name="movieName" placeholder="movie Name" value="<?php echo $data['movieName'] ?>">
          <span class="invalid-feedback"><?php echo $data['movieName_err']; ?></span>
    </div>
    <div class="row">
         <input type="file" name="file" class="bg-white custom-file-input form_elem col-md col-sm-12 col-lg" value="<?php echo $data['img']; ?>">
    </div>
    <div class="row">
    <textarea name="body" placeholder="description" class="form_elem col-md col-sm-12 col-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" rows="4" cols="50"><?php echo $data['body']; ?></textarea>
    <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
    </div>
    <div class="row">
       <input type="submit" class="btn btn-danger form_elem col-lg col-md-12 col-sm-12 mt-3" value="Post">
    </div>
    </form>   
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>