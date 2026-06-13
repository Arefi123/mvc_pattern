<?php

require_once __DIR__ . "/config/db.php";

require_once __DIR__ . "/app/Controllers/UserController.php";

$userController = new UserController($pdo);

$userController->index();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $userController->create();
        break;
    case 'store':
        $userController->store();
        break;
    default:
        $userController->index();
}