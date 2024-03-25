<?php
session_start();

use Models\DbConnexion\DbConnexion;
use Models\User\User;
use Repositories\UserManager\UserManager;

include("./autoloader.php");

if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $decodedUser = (json_decode($data, true));


    $user = new User($decodedUser);

    $dbConnexion = new DbConnexion();

    $userManager = new UserManager($dbConnexion);



    // if ($userManager->checkUserExist($user) !== false) {
    //     echo "Email already taken";
    //     return;
    // }


    // echo $userManager->checkUserExist($user);

    if ($userManager->register(($user))) {
        $_SESSION["id"] = $user->getIDUser();
        echo "inserted";
    } else {
        echo "Error";
    }
}
