<?php
    require_once("Post.php");

    $test1 = new Post();
    var_dump($test1->getAllPosts()) .PHP_EOL;
    var_dump($test1->getPostById(1)) .PHP_EOL;
    $data = ['title'=> 'The Titanic battle', 'content'=> 'This is one of the titanic lost ship'];
    $test1->insertPost($data);
