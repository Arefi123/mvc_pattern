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

    public function create()
    {
        require_once __DIR__ . '/../Views/create.php';
    }

    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $this->user->store($name, $email);

        header("Location: ?");

    }

    public function delete()
    {
        $userId = $_GET['id'];

        $this->user->destroy($userId);

        header("Location: ?");
    }


    public function edit()
    {
        $userId = $_GET['id'];

        $user = $this->user->find($userId);
        require_once __DIR__ . '/../Views/edit.php';
    }

    public function update()
    {
        $userId = $_POST['id'];
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];

        $this->user->update($userId, $userName, $userEmail);

        header("Location: ?");
    }
}