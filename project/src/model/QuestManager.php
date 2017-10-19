<?php

namespace project\model;

class QuestManager extends Pdo
{
    public function findAll()
    {
        $query = "SELECT * FROM quest";
        $statement = $this->pdo->query($query);
        return $statement->fetchAll(\PDO::FETCH_CLASS, Quest::class);
    }

    public function find(int $id) : Quest
    {
        $query = "SELECT * FROM quest WHERE id=:id";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
        $quests = $statement->fetchAll(\PDO::FETCH_CLASS, Quest::class);
        return $quests[0];
    }
}