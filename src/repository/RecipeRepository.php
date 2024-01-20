<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Recipe.php';
require_once __DIR__.'/../models/RecipeDetails.php';
require_once __DIR__.'/../models/NutritionalValue.php';

class RecipeRepository extends Repository {
    public function getRandomMeals($limit = 4) {
        try {
            $conn = $this->database->connect();

            $query = "SELECT meal_name FROM meals ORDER BY RANDOM() LIMIT :limit";
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
            $query = "SELECT meal_name, description FROM meals ORDER BY RANDOM() LIMIT 1";
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
}
?>