<?php 
    class Post{
        private $post = "";

        function setPost($post){
            $this->post = $post;
        }
        function getPost(){
            return $this->post;
        }
    }

    $post1 = new Post();
    $post1->setPost("This is a blog post");
    echo $post1->getPost();