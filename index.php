<?php

require_once __DIR__ . "/config/db.php";

require_once __DIR__ . "/app/Controllers/UserController.php";

$userController = new UserController($pdo);

$userController->index();