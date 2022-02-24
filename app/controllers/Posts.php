<?php
  class Posts extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->postModel = $this->model('Post');
      $this->userModel = $this->model('User');
      $this->commentModel = $this->model('Comment');
    }

    public function index(){
      // Get posts      
      $posts = $this->postModel->getPosts();
       $array = [];
       foreach($posts as $post){
         $array +=[$post->postId => $this->commentModel->getComments($post->postId)];
       }

      $data = [
         'posts' => $posts,
         'comments'=>$array
       ];

      $this->view('posts/index',$data);
    }
    
    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'movieName' => trim($_POST['movieName']),
          'img' => $_POST['file'],
          'user_id' => $_SESSION['user_id'],
          'title_err' => '',
          'body_err' => '',
          'movieName_err' => ''

        ];

        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Please enter title';
        }
        if(empty($data['body'])){
          $data['body_err'] = 'Please enter body text';
        }
        if(empty($data['movieName'])){
          $data['movieName_err'] = 'Please enter body text';
        }

        // Make sure no errors
        if(empty($data['title_err']) && empty($data['body_err']) && empty($data['movieName_err'])){
          // Validated
          if($this->postModel->addPost($data)){
            flash('post_message', 'Post Added');
            redirect('posts');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('posts/add', $data);
        }

      } else {
        $data = [
          'title' => '',
          'body' => '',
          'movieName' => ''
        ];
  
        $this->view('posts/add', $data);
      }
    }

    public function edit($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'id' => $id,
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'img' => trim($_POST['file']),
          'movieName' => trim($_POST['movieName']),
          'user_id' => $_SESSION['user_id'],
          'title_err' => '',
          'body_err' => '',
          'img_err'=>'',
          'movieName_err'=>''
        ];

        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Please enter title';
        }
        if(empty($data['body'])){
          $data['body_err'] = 'Please enter body text';
        }
        if(empty($data['img'])){
          $data['img_err'] = 'Please enter an image';
        }
        if(empty($data['movieName'])){
          $data['movieName_err'] = 'Please enter a movie Name';
        }

        // Make sure no errors
        if(empty($data['title_err']) && empty($data['body_err']) && empty($data['img_err']) && empty($data['movieName_err'])){
          // Validated
          if($this->postModel->updatePost($data)){
            flash('post_message', 'Post Updated');
            redirect('posts');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('posts/edit', $data);
        }

      } else {
        // Get existing post from model
        $post = $this->postModel->getPostById($id);

        // Check for owner
        if($post->userId != $_SESSION['user_id']){
          redirect('posts');
        }

        $data = [
          'id' => $id,
          'title' => $post->title,
          'body' => $post->body
        ];
  
        $this->view('posts/edit', $data);
      }
    }

    

    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Get existing post from model
        $post = $this->postModel->getPostById($id);
        
        // Check for owner
         if($post->userId != $_SESSION['user_id']){
           redirect('posts');
         }

        if($this->postModel->deletePost($id)){
          flash('post_message', 'Post Removed');
          redirect('posts');
        } else {
          die('Something went wrong');
        }
      } else {
        redirect('posts');
      }
    }
  }