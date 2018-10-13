<?php

namespace Controller;
// src/Controller/CategoryController.php
use Model\Category;
use Model\CategoryManager;

class CategoryController extends AbstractController

{

    public function index()
    {
        $categoryManager = new CategoryManager($this->pdo);
        $categories = $categoryManager->selectAll();

        return $this->twig->render('category.html.twig', ['categories' => $categories]);

    }

    public function show(int $id)
    {
        $categoryManager = new CategoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);

        return $this->twig->render('showCategory.html.twig', ['category' => $category]);
    }

    public function add()
    {
        if (!empty($_POST)) {
            // TODO : validations des valeurs saisies dans le form
            // création d'un nouvel objet Category et hydratation avec les données du formulaire
            $category = new Category();
            $category->setCategory($_POST['category']);

            $categoryManager = new CategoryManager($this->pdo);
            // l'objet $category hydraté est simplement envoyé en paramètre de insert()
            $categoryManager->insert($category);
            // si tout se passe bien, redirection
            header('Location: /categories');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('addCategory.html.twig');
    }

    public function edit(int $id): string
    {
        $categoryManager = new CategoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $category->setCategory($_POST['category']);
            $categoryManager->update($category);
        }

        return $this->twig->render('categoryEdit.html.twig', ['category' => $category]);
    }
    public function delete(int $id)
    {
        $categoryManager = new CategoryManager($this->pdo);
        $categoryManager->delete($id);
        header('Location:/categories');
    }
}