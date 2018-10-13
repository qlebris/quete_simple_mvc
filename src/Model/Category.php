<?php
namespace Model;

class Category
{
    private $id;
    private $category;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): Category
    {
        $this->id = $id;
        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory($category):Category
    {
        $this->category = $category;
        return $this;
    }
}