<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Recipe.php';
require_once __DIR__.'/../models/RecipeDetails.php';
require_once __DIR__.'/../models/NutritionalValue.php';

class RecipeRepository extends Repository {

    public function getRandomMeals($limit = 4) {
        try {
            $conn = $this->database->connect();

            $query = "SELECT meal_name, image FROM meals ORDER BY RANDOM() LIMIT :limit";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);

            try {
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw $e;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw $e;
        }
    }

    public function getMealOfDay() {

        try {
            $conn = $this->database->connect();
            $query = "SELECT meal_name, description, image FROM meals ORDER BY RANDOM() LIMIT 1";
            $stmt = $conn->prepare($query);

            try {
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                // Ograniczenie opisu do 50 słów
                $result['description'] = $this->truncateWords($result['description'], 50);

                return $result;
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
            } catch (PDOException $e) {
            error_log($e->getMessage());
            throw $e;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw $e;
        }
    }

    // Funkcja do skracania tekstu do określonej liczby słów
    private function truncateWords($text, $limit) {
        $words = explode(' ', $text);
        $truncatedWords = array_slice($words, 0, $limit);
        return implode(' ', $truncatedWords);
    }

    public function getBrekfast() {
        try {
            $conn = $this->database->connect();
            $query = "SELECT meal_name, image FROM meals WHERE category = 'Brekfast'";
            $stmt = $conn->prepare($query);

            try {
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
            } catch (PDOException $e) {
            error_log($e->getMessage());
            throw $e;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw $e;
        }
    }

    public function getLunch() {
        try {
            $conn = $this->database->connect();
            $query = "SELECT meal_name, image FROM meals WHERE category = 'Lunch'";
            $stmt = $conn->prepare($query);

            try {
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
            } catch (PDOException $e) {
            error_log($e->getMessage());
            throw $e;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw $e;
        }
    }

    public function getDinner() {
        try {
            $conn = $this->database->connect();
            $query = "SELECT meal_name, image FROM meals WHERE category = 'Dinner'";
            $stmt = $conn->prepare($query);

            try {
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
            } catch (PDOException $e) {
            error_log($e->getMessage());
            throw $e;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw $e;
        }
    }

    public function getSnack() {
        try {
            $conn = $this->database->connect();
            $query = "SELECT meal_name, image FROM meals WHERE category = 'Snack'";
            $stmt = $conn->prepare($query);

            try {
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
            } catch (PDOException $e) {
            error_log($e->getMessage());
            throw $e;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw $e;
        }
    }
    
    public function getRecipe($mealName) {
        try {
            $conn = $this->database->connect();
            $query = "SELECT 
                m.category AS Category,
                m.meal_name AS MealName,
                m.description AS Description,
                m.ingredients AS Ingredients,
                m.preparation AS Preparation,
                m.image AS Image,
                md.prep_time AS PrepTime,
                md.cook_time AS CookTime,
                md.servings AS Servings,
                nv.total_calories AS Calories,
                nv.protein AS Protein,
                nv.fat AS Fat,
                nv.carbs AS Carbs,
                nv.sugar AS Sugar,
                nv.fiber AS Fiber,
                nv.sodium AS Sodium,
                nv.potassium AS Potassium,
                nv.magnesium AS Magnesium,
                nv.calcium AS Calcium
            FROM 
                meals m
            INNER JOIN 
                meal_details md ON m.meal_details_id = md.id
            INNER JOIN 
                nutrition_values nv ON m.nutrition_values_id = nv.id
            WHERE m.meal_name = :mealName"; // Użycie placeholdera :mealName
    
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':mealName', $mealName, PDO::PARAM_STR); // Powiązanie parametru
    
            try {
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw $e;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw $e;
        }
    }
    
}

?>