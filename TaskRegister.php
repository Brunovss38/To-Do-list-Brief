<?php

use Models\DbConnexion\DbConnexion;
use Models\Task\Task;
use Repositories\TaskManager\TaskManager;

session_start();

include("./autoloader.php");

if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $decodedTask = (json_decode($data, true));


    $task = new Task($decodedTask);

    $dbConnexion = new DbConnexion();

    $taskManager = new TaskManager($dbConnexion);
}
