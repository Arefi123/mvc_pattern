<?php

class User
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function getUsers()
    {
        $users_query = "SELECT * FROM users";

        $query = $this->pdo->query($users_query);

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}