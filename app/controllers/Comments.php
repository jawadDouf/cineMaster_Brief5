<?php
session_start();
class Comments extends Controller{

    public function __construct(){
       
  
        $this->postModel = $this->model('Post');
        $this->commentModel = $this->model('Comment');
      }

      public function add($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Sanitize POST array
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
          $data = [
            'postId'=>$id,
            'userId'=>$_SESSION['user_id'],
            'body' => trim($_POST['body']),
            'body_err' => '',
          ];
  
          // Validate data
         
          if(empty($data['body'])){
            $data['body_err'] = 'Please enter body text';
          }
          
  
          // Make sure no errors
          if(empty($data['body_err'])){
            // Validated
            if($this->commentModel->addComment($data)){
              flash('post_message', 'Post Added');
              redirect('posts');
            } else {
              die('Something went wrong');
            }
          } else {
            // Load view with errors
            $this->view('posts/index', $data);
          }
  
        } else {
          $data = [
            'title' => '',
            'body' => '',
            'movieName' => ''
          ];
    
          $this->view('posts/index', $data);
        }
      }










    }


















?>