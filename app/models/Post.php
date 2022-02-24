<?php
 require_once "Comment.php";
  class Post {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

     public function getPosts(){
       $this->db->query('SELECT posts.* , users.firstName,users.lastName,users.userId
                         FROM posts 
                         INNER JOIN users
                         ON posts.userId = users.userId 
                         ORDER BY posts.published_at DESC
                         ');
       
       
       $results = $this->db->resultSet();
     
       return $results;
     }


    public function addPost($data){
      $this->db->query('INSERT INTO posts (title, userId, body,movieName,img) VALUES(:title, :user_id, :body,:movieName,:img)');
      // Bind values
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':body', $data['body']);
      $this->db->bind(':img', $data['img']);
      $this->db->bind(':movieName', $data['movieName']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function updatePost($data){
      $this->db->query('UPDATE posts SET title = :title, body = :body , movieName = :movieName , img = :img  WHERE postId = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':body', $data['body']);
      $this->db->bind(':movieName', $data['movieName']);
      $this->db->bind(':img', $data['img']);
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function getPostById($id){
      $this->db->query('SELECT * FROM posts WHERE postId = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function deletePost($id){
      $this->db->query('DELETE FROM posts WHERE postId = :id');
     
                          
      // Bind values
      $this->db->bind(':id',$id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }