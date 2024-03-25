<?php

namespace Repositories\PriorityManager;


use Models\DbConnexion\DbConnexion;
use Models\Product\Priority;

class PriorityManager
{
    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function allCategories()
    {
        $Priority = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM priority");
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $Priority[] = new Priority($row);
            }
        } catch (\PDOException $e) {
            return $Priority;
        }
        return $Priority;
    }

    public function insertPriority(priority $objet)
    {
        $name = $objet->getName();
        try {
            $stmt = $this->pdo->prepare("INSERT INTO priority (name) VALUES (?)");
            $stmt->execute([$name]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
