<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Recipe.php';
require_once __DIR__.'/../models/RecipeDetails.php';
require_once __DIR__.'/../models/NutritionalValue.php';
require_once __DIR__.'/../repository/RecipeRepository.php';


//tutuj bede robic routing so storn brekfats, dinner, lunch, snack czyli przekierowanie do danego widoku
class RecipeController extends AppController {

    private $recipeRepository;

    public function __construct() {
        parent::__construct();
        $this->recipeRepository = new RecipeRepository();
        session_start();
    }

    private function checkLoggedIn() {
        if (!isset($_SESSION['user'])) {
            // Użytkownik nie jest zalogowany, przekieruj do strony logowania
            header('Location: /login'); // Zakładam, że ścieżka do strony logowania to '/login'
            exit();
        }
    }

    public function brekfast() {
        $this->checkLoggedIn();
        $brekfast = $this->recipeRepository->getBrekfast();
        return $this->render('brekfast', [
            'brekfast' => $brekfast,
        ]);
    }
    public function lunch() {
        //TODO zrobic przekierowanie do lunch
        $this->checkLoggedIn();
        $lunch = $this->recipeRepository->getLunch();
        return $this->render('lunch', [
            'lunch' => $lunch,
        ]);
    }

    public function dinner() {
        //TOOD zrobic przekeierowanie do dinner
        $this->checkLoggedIn();
        $dinner = $this->recipeRepository->getDinner();
        return $this->render('dinner', [
            'dinner' => $dinner,
        ]);
    }

    public function snack() {
        //TODO zorbic przekierowanie do snack
        $this->checkLoggedIn();
        $snack = $this->recipeRepository->getSnack();
        return $this->render('snack', [
            'snack' => $snack,
        ]);
    }

    public function recipe() {
        $this->checkLoggedIn();
        $mealName = $_POST['meal_name'];
        $recipe = $this->recipeRepository->getRecipe($mealName);
        return $this->render('recipe', [
            'recipe' => $recipe,
        ]);
    }
}