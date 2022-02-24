<?php
  class Comment{
    private $db;
    public function __construct()
    {
      $this->db = new Database;
    }

public function getComments($postId){
      $this->db->query('SELECT   c.*,u.firstName,u.lastName 
                        FROM     comments c, posts p, users u 
                        WHERE    c.userId = u.userId
                        and      c.postId = p.postId
                        and      p.postId = :postId
                        ORDER By p.published_at DESC');
      $this->db->bind(':postId', $postId);                
      $results = $this->db->resultSet();
      return $results;
    }
public function addComment($data){
      $this->db->query('INSERT INTO comments (postId, body,userId) VALUES(:post_id,:body,:userId)');
      // Bind values
      $this->db->bind(':post_id', $data['postId']);
      $this->db->bind(':body', $data['body']);
      $this->db->bind(':userId', $data['userId']);
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  public function deleteComment($postId){
    $this->db->query('DELETE FROM comments WHERE postId = :id');
  

      $this->db->bind(':id', $postId);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }

    }
  
  }

?>