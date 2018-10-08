<?php

namespace Controller;
// src/Controller/CategoryController.php
use Model\CategoryManager;
use Twig_Loader_Filesystem;
use Twig_Environment;

class CategoryController


{
    private $twig;


    public function index()
    {
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->selectAllItems();
        //require __DIR__ . '/../View/category.html.twig';
        return $this->twig->render('category.html.twig', ['categories' => $categories]);

    }

    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneItem($id);

        return $this->twig->render('showCategory.html.twig', ['category' => $category]);
    }

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../View');
        $this->twig = new Twig_Environment($loader);
    }
}