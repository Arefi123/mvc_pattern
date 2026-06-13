<?php

require_once __DIR__ . '/../Models/User.php';
class UserController
{
    private $user;

    public function __construct(PDO $db)
    {
        $this->user = new User($db);
    }

    public function index()
    {
        $users = $this->user->getUsers();

        require_once __DIR__ . '/../Views/users.php';
    }

}