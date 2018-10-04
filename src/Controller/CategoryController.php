<?php
namespace Controller;
// src/Controller/CategoryController.php
use Model\CategoryManager;

class CategoryController
{
    public function index()
    {
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->selectAllItems();
        require __DIR__ . '/../View/category.php';
    }

    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneItem($id);

        require __DIR__ . '/../View/showCategory.php';
    }
}


