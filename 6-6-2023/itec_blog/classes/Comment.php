<?php 

class Comments {
    public $conn;
    public $text;
    public $post_id;
    public $user_id;
    public $comments = [];

    public function __construct($conn) {
        $this->conn = $conn;
        $this->user_id = 1;
    }

    public function getComments($post_id) { 
        $this->post_id = $post_id;
        $sql = "SELECT * FROM comments WHERE post_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('s', $this->post_id);
        $stmt->execute();
        $stmt = $stmt->get_result();
        $this->comments = $stmt->fetch_all(MYSQLI_ASSOC);
        return $this->comments;
    }

    public function insertComment($text, $post_id, $user_id = 1) { 
        $this->post_id = $post_id;
        $this->text = $text;
        $sql = "INSERT INTO comments (comment_text, post_id, user_id) VALUES (?, ?, ?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $this->text, $this->post_id, $this->user_id);
        $stmt->execute();
        return $stmt->affected_rows;
    }

}

?>