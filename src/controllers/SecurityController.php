<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/RecipeRepository.php'; 


class SecurityController extends AppController {


    public function home() {

        $userRepository = new UserRepository();
        $recipeRepository = new RecipeRepository(); 

        session_start(); //start sesji


        if (isset($_POST["email-l"]) && isset($_POST["password-l"])) {
            // Logowanie
            $email = $_POST["email-l"];
            $password = $_POST["password-l"];

            $user = $userRepository->getUser($email, $password);

            if(!$user) {
                return $this->render('login', ['messages' => ['Invalid email or password']]);
            }

            $_SESSION['user'] = $user; // Ustawienie użytkownika w sesji
            
            // Pobieranie danych przepisów
            $randomMeals = $recipeRepository->getRandomMeals();
            $mealOfDay = $recipeRepository->getMealOfDay();

            return $this->render('home', [
                'randomMeals' => $randomMeals,
                'mealOfDay' => $mealOfDay,
                'user' => $_SESSION['user'], 
            ]);
        } 
        elseif (isset($_POST["username-a"]) && isset($_POST["email-a"]) && isset($_POST["password-a"])) {
            // Rejestracja
            $username = $_POST["username-a"];
            $email = $_POST["email-a"];
            $password = $_POST["password-a"];

            if ($userRepository->userExists($email)) {
                return $this->render('register', ['messages' => ['User with this email already exists :(']]);
            }

            $newUser = new User($username, $email, $password);
            $userRepository->addUser($newUser);

            $_SESSION['user'] = $newUser; // Ustawienie nowego użytkownika w sesji

            
            // Pobieranie danych przepisów
            $randomMeals = $recipeRepository->getRandomMeals();
            $mealOfDay = $recipeRepository->getMealOfDay();

            return $this->render('home', [
                'randomMeals' => $randomMeals,
                'mealOfDay' => $mealOfDay,
                'user' => $_SESSION['user'] 
            ]);
        }
        elseif (isset($_SESSION['user'])) {

            // Jeśli użytkownik jest już zalogowany
            $randomMeals = $recipeRepository->getRandomMeals();
            $mealOfDay = $recipeRepository->getMealOfDay();

            return $this->render('home', [
                'randomMeals' => $randomMeals,
                'mealOfDay' => $mealOfDay,
                'user' => $_SESSION['user'] 
            ]);
        } 
        else {
            // Przekierowanie na stronę logowania, jeśli nie zalogowany
            return $this->render('login');
        }
    }
}
