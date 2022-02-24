<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URLROOT;?>/css/posts.css">
    <title>MovisWebSite</title>
</head>
<body>
  <?php require APPROOT . '/views/inc/navbar.php'; ?>
  
<div class="row add-btn">
<button class="btn btn-danger"  type="button"><a style="text-decoration: none;color:white;" href="<?php echo URLROOT; ?>/posts/add">Add</a></button>    

</div>
<?php foreach($data['posts'] as $post) : ?>
<div class="container post bg-white mt-2">

    <div class="row post_titles">
        <h4 class="col-12"><?php echo $post->lastName . " " . $post->firstName ?></h4>
        <p class="col-12"><?php echo $post->published_at ?></p>
    </div>
    <div class="row post_description">
        <p><?php echo $post->body ?></p>
    </div>
    <div  class="row post_comments">
        <?php $img = $post->img; ?>
        <img src="<?= URLROOT . '/img/'.$img;?>" >
    </div>
    <div class="row pt-2 justify-content-center ">
   <?php if($_SESSION["user_id"] == $post->userId): ?>
    <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $post->postId ?>" class="btn btn-danger ms-2 col-4">Edit</a>
    <button type="button" class="btn btn-danger ms-2 col-3">Comments</button>
    <form class="col-4" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $post->postId ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger col-12">
    </form>
    <?php else: ?>
    <button type="button" class="btn btn-danger ms-2 col-10">Comments</button>
    <?php endif; ?>
    </div>
    <div class="row comments mt-3">
    
    <?php foreach($data["comments"][$post->postId] as $comment) : ?>
  
    <h5><?= $comment->firstName . " ". $post->lastName ?></h5>
    <p><?= $comment->body ?></p>
    
    <?php endforeach; ?>
    <p></p>
    <form action="<?php echo URLROOT;?>/Comments/add/<?php echo $post->postId ?>" method="post">
          <input name="body" type="text" class="ms-3 p-1 col-9" >
         <button type="submit" class="btn btn-danger mb-2 ms-2 col-2">Send</button>  
    </form>

    <p></p>
   </div>
</div>

<?php endforeach; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?> 