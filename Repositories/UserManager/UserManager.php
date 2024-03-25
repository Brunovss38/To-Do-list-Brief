<?php

namespace Repositories\UserManager;

use Models\DbConnexion\DbConnexion;
use Models\User\User;

class UserManager
{

    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function login(string $Email, string $Password)
    {
        $hash = hash("whirlpool", $Password);


        try {
            $stmt = $this->pdo->query("SELECT * FROM user WHERE Email = '$Email' AND Password = '$hash' ");
        } catch (\PDOException $e) {
            var_dump($e);
        }
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $user = new User($row);
        }

        if (isset($user)) {
            return $stmt->rowCount() == 1;
        }
    }

    public function register(User $user)
    {
        $Password = hash("whirlpool", $user->getPassword());

        try {
            $stmt = $this->pdo->prepare("INSERT INTO user VALUES(NULL, ?, ?, ?, ?)");
            $stmt->execute([$user->getFirstName(), $user->getLastName(), $Password, $user->getEmail()]);
            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            return $e;
        }
    }


    public function checkUserExist(User $user)
    {
        $Email = $user->getEmail();

        try {
            $stmt = $this->pdo->query("SELECT * FROM user WHERE Email = '$Email' ");
        } catch (\PDOException $e) {
            return $e;
        }
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $user = new User($row);
        }

        if (isset($user)) {
            return true;
        } else {
            return false;
        }
    }
}
