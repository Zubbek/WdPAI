<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Recipe.php';
require_once __DIR__.'/../models/RecipeDetails.php';
require_once __DIR__.'/../models/NutritionalValue.php';

class RecipeRepository extends Repository {

    public function getRandomMeals($limit = 4) {
        try {
            $conn = $this->database->connect();

            $query = "SELECT meal_name, image FROM meals LIMIT :limit";
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
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }

    public function getMealOfDay() {

        try {
            $conn = $this->database->connect();
            $query = "SELECT meal_name, description, image FROM meals LIMIT 1";
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
        } finally { //zamykanie połączenia 
            if ($conn) {
                $conn = null;
            }
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
            $query = "SELECT meal_name, image FROM meals WHERE category = 'breakfast'";
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
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }

    public function getLunch() {
        try {
            $conn = $this->database->connect();
            $query = "SELECT meal_name, image FROM meals WHERE category = 'lunch'";
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
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }

    public function getDinner() {
        try {
            $conn = $this->database->connect();
            $query = "SELECT meal_name, image FROM meals WHERE category = 'dinner'";
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
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }

    public function getSnack() {
        try {
            $conn = $this->database->connect();
            $query = "SELECT meal_name, image FROM meals WHERE category = 'snacks'";
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
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }
    
    public function getRecipe($mealName) {
        try {
            $conn = $this->database->connect();
            $query = "SELECT 
                m.id AS id,
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
        }finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }

    public function getFavourites() {
        try {
            $conn = $this->database->connect();
            $query = "SELECT 
            m.meal_name,
            m.image
            FROM 
                meals m
            INNER JOIN 
                favourites f ON m.id = f.meal_id
            INNER JOIN 
            users u ON f.user_id = u.id;";
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
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }

    public function addToFavourites($user_id, $meal_id) {
        try {
            $conn = $this->database->connect();
            $query = "INSERT INTO favourites (user_id, meal_id) VALUES (:user_id, :meal_id)";
            $stmt = $conn->prepare($query);
    
            // Bindowanie parametrów
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':meal_id', $meal_id);
    
            // Wykonanie zapytania
            $success = $stmt->execute();
    
            if ($success) {

                // Zgłaszanie alertu
                $this->sendFavouriteAddedNotification();
                return true; 
            } else {
                return false; 
            }
        } catch (PDOException $e) {
            if ($e->getCode() == '23505') { // Unique violation
                return false; // Zwracanie false, jeśli przepis już istnieje
            } else {
                error_log("Query failed: " . $e->getMessage());
                throw $e;
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw $e;
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }
    

    public function getId($email) {
        try {
            $conn = $this->database->connect();
            $query = "SELECT id FROM users WHERE email = :email"; // Poprawienie literówki w nazwie kolumny oraz zabezpieczenie przed SQL Injection
            $stmt = $conn->prepare($query);
            
            // Bindowanie parametrów
            $stmt->bindParam(':email', $email);
    
            $success = $stmt->execute();
    
            if ($success) {
                // Pobranie wyniku zapytania
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                // Jeżeli znaleziono użytkownika, zwracanie id
                if ($result) {
                    return $result['id'];
                } else {
                    return null;
                }
            } else {
                return false;
            }
        } catch (PDOException $e) {
            // Obsługa błędu związanego z bazą danych
            error_log("Query failed: " . $e->getMessage());
            throw $e; 
        } catch (Exception $e) {
            // Obsługa innych błędów
            error_log($e->getMessage());
            throw $e; 
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }    

   // Metoda do wysyłania powiadomienia o dodaniu ulubionego
   private function sendFavouriteAddedNotification() {
        try {
            $conn = $this->database->connect();
            // Wiadomość powiadomienia
            $notificationMessage = json_encode(array(
                'type' => 'favourite_added',
                'message' => 'Favourite added'
            ));

            // Wywołanie funkcji pg_notify() do wysłania powiadomienia
            $query = "SELECT pg_notify('favourite_added', :notification_message)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':notification_message', $notificationMessage);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            throw $e;
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }
    public function getNotification() {
        try {
            $conn = $this->database->connect();
            // Oczekiwanie na powiadomienia
            $res = pg_get_notify($conn);
            if ($res) {
                return $res['message'];
            } else {
                return 'No notification received';
            }
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            throw $e;
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }    
}
?>