<?php
namespace Model;
// src/Model/CategoryManager.php

// récupération de toutes les catégories

class CategoryManager extends AbstractManager
{
    const TABLE = 'category';

    public function __construct($pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(Category $category): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`category`) VALUES (:category)");
        $statement->bindValue('category', $category->getCategory(), \PDO::PARAM_STR);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
    public function update(Category $category):int
    {

        // prepared request
        $statement = $this->pdo->prepare("UPDATE $this->table SET `category` = :category WHERE id=:id");
        $statement->bindValue('id', $category->getId(), \PDO::PARAM_INT);
        $statement->bindValue('category', $category->getCategory(), \PDO::PARAM_STR);


        return $statement->execute();
    }
    public function delete(int $id): void
    {
        // prepared request
        $statement = $this->pdo->prepare("DELETE FROM $this->table WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }
}
