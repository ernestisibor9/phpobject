<?php 
    require_once('Database.php');

    $test1 = new Database();
    echo $test1->isConnect() ? "Database Connected" : "Not Connected";

    $test1->query("SELECT * FROM tbl_test");
    var_dump($test1->resultSet()) .PHP_EOL;
    echo "Row count: " . $test1->rowCount();    
    var_dump($test1->singleResult()) . PHP_EOL;
    $test1->query("SELECT * FROM tbl_test WHERE id = :id");
    $test1->bind(':id', 2);
    var_dump($test1->singleResult()) . PHP_EOL;