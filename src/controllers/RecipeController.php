<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Recipe.php';
require_once __DIR__.'/../models/RecipeDetails.php';
require_once __DIR__.'/../models/NutritionalValue.php';
require_once __DIR__.'/../repository/RecipeRepository.php';


class RecipeController extends AppController {
    private $recipeRepository;

    public function __construct() {
        parent::__construct();
        $this->recipeRepository = new RecipeRepository();
        session_start();
    }

    public function brekfast() {
        $this->checkLoggedIn();
        $brekfast = $this->recipeRepository->getBrekfast();
        return $this->render('brekfast', [
            'brekfast' => $brekfast,
        ]);
    }

    public function lunch() {
        $this->checkLoggedIn();
        $lunch = $this->recipeRepository->getLunch();
        return $this->render('lunch', [
            'lunch' => $lunch,
        ]);
    }

    public function dinner() {
        $this->checkLoggedIn();
        $dinner = $this->recipeRepository->getDinner();
        return $this->render('dinner', [
            'dinner' => $dinner,
        ]);
    }

    public function snack() {
        $this->checkLoggedIn();
        $snack = $this->recipeRepository->getSnack();
        return $this->render('snack', [
            'snack' => $snack, 
        ]);
    }

    public function recipe() {
        session_start();
        $this->checkLoggedIn();
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['meal_name'])) {
            $recipe_id = $_POST['recipe_id'];
            $user_id = $_SESSION['user'];
            $mealName = $_POST['meal_name'];
            $recipe = $this->recipeRepository->getRecipe($mealName);
            return $this->render('recipe', [
                'recipe' => $recipe,
                'user' => $_SESSION['user'],
            ]);
        }
    }

    public function favourites() {
        $this->checkLoggedIn();
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['recipe_id']) && isset($_POST['user_email'])) {
            $recipe_id = $_POST['recipe_id'];
            $user_email = $_POST['user_email']; 
            $user_id = $this->recipeRepository->getId($user_email);
            $success = $this->recipeRepository->addToFavourites($user_id, $recipe_id);
        
            if ($success) {
                echo "<script>alert('Recipe added successfully');</script>";
            } else {
                echo "<script>alert('Recipe already exists');</script>";
            }
        }
        $favourites = $this->recipeRepository->getFavourites();
        return $this->render('favourites', [
            'favourites' => $favourites,
        ]);
    }

    private function checkLoggedIn() {
        if (!isset($_SESSION['user'])) {
            // Użytkownik nie jest zalogowany, przekierowanie do strony logowania
            header('Location: /login');
            exit();
        }
    }
}