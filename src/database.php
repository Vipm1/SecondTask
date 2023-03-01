<?php


require '../vendor/autoload.php';


class Database
{

    private string $host = 'localhost';
    private string $db_name = 'test';
    private string $username = 'root';
    private string $password = 'Rjnjdfcz228';

    public ?PDO $conn = null;

    public function getConnection(): ?PDO
    {

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");

        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

}

//$objectDataBase = new Database;
//$objectDataBase->getConnection();



