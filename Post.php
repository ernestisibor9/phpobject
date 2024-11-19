<?php 
    require_once('./database/Database.php');

    class Post{
        private $db;
        
        public function __construct(){
            $this->db = new Database();
        }
        // Get All Posts
        public function getAllPosts(){
            $query = "SELECT * FROM tbl_post";
            $this->db->query($query);
            return $this->db->resultSet();
        }
        // Get Single Post
        public function getPostById($id){
            $query = "SELECT * FROM tbl_post WHERE id = :id";
            $this->db->query($query);
            $this->db->bind(':id', $id);
            return $this->db->singleResult();
        }
        // Insert a new post
        public function insertPost($data){
            $query = "INSERT INTO tbl_post (title, content) VALUES (:title, :content)";
            $this->db->query($query);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':content', $data['content']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    };