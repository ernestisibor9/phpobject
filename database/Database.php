<?php
require_once("config.php");

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $connection;
    private $error;
    private $stmt;
    private $dbconnected = false;

    public function __construct()
    {
        // Set PDO connection
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbconnected = true;
            // echo "Database connected successfully" . PHP_EOL;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            // echo $this->error;
        }
    }
    public function getError()
    {
        return $this->error;
    }
    public function isConnect()
    {
        return $this->dbconnected;
    }
    // Prepare the statement with query 
    public function query($query)
    {
        $this->stmt = $this->connection->prepare($query);
    }
    // Execute the prepared statement
    public function execute()
    {
        return $this->stmt->execute();
    }
    // Get the result set as array of objects
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    // Get the row count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
    // Get single result
    public function singleResult()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    // Bind parameter to values
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindParam($param, $value, $type);
    }
}

// $test1 = new Database();

