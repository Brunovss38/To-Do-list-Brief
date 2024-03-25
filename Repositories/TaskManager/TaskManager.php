<?php

namespace Repositories\TaskManager;

use Models\DbConnexion\DbConnexion;
use Models\Task\Task;

class TaskManager
{

    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function allTasksAndCategories()
    {
        $task = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM task INNER JOIN category ON task.ID_Category = Category.ID");

            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $task[] = new Task($row);
            }
        } catch (\PDOException $e) {
            return $task;
        }

        return $task;
    }

    public function insertTask(Task $objet)
    {
        $name = $objet->getName();
        $Description = $objet->getDescription();
        $Date = $objet->getDate();
        $ID_User = $objet->getID_User();
        $ID_Priority = $objet->getID_Priority();

        try {
            $stmt = $this->pdo->prepare("INSERT INTO product VALUES(NULL, ?, ?, ?, ?)");
            $stmt->execute([$name, $Description, $Date, $ID_User, $ID_Priority]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            var_dump($e);
        }
    }
}
