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

    public function store($name, $email)
    {
        $query = "INSERT INTO users(name, email) VALUES(?, ?)";
        $dbQuery = $this->pdo->prepare($query);

        $result = $dbQuery->execute([$name, $email]);

        return $result;
    }

    public function destroy($id)
    {
        $query = "DELETE FROM users where id = ?";
        $dbQuery = $this->pdo->prepare($query);

        $result = $dbQuery->execute([$id]);

        return $result;
    }


    public function find($id)
    {
        $query = "SELECT * FROM users WHERE id = ?";

        $result = $this->pdo->prepare($query);

        $result->execute([$id]);

        return $result->fetch(PDO::FETCH_ASSOC);

    }

    public function update($id, $name, $email)
    {
        $query = "UPDATE users SET name = ?, email = ? WHERE id = ?";
        $dbQuery = $this->pdo->prepare($query);

        $result = $dbQuery->execute([$name, $email, $id]);

        return $result;
    }
}