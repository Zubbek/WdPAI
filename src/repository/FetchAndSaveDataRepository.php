<?php

require_once 'Repository.php';

class FetchAndSaveDataRepository extends Repository {

    public function saveDataFromApi($data) {
        var_dump($data, "data z repository");
        if (!is_array($data)) {
            echo json_encode(['status' => 'error', 'message' => 'Przekazane dane nie są tablicą.']);
            return;
        }

        try {
            $conn = $this->database->connect();
            foreach ($data as $item) {
                // Wstawianie danych do tabeli meal_details
                $stmtDetails = $conn->prepare("INSERT INTO meal_details (prep_time, cook_time, servings) VALUES (:prep_time, :cook_time, :servings) RETURNING id");
                $stmtDetails->bindParam(':prep_time', $item['prep_time']);
                $stmtDetails->bindParam(':cook_time', $item['cook_time']);
                $stmtDetails->bindParam(':servings', $item['servings']);
                $stmtDetails->execute();
                $mealDetailsId = $stmtDetails->fetch(PDO::FETCH_ASSOC)['id'];
        
                // Wstawianie danych do tabeli nutrition_values
                $nutritionValues = $item['nutrition_values'];
                $stmtNutrition = $conn->prepare("INSERT INTO nutrition_values (total_calories, protein, fat, carbs, sugar, fiber, sodium, potassium, magnesium, calcium) VALUES (:total_calories, :protein, :fat, :carbs, :sugar, :fiber, :sodium, :potassium, :magnesium, :calcium) RETURNING id");
                $stmtNutrition->bindParam(':total_calories', $nutritionValues['total_calories']);
                $stmtNutrition->bindParam(':protein', $nutritionValues['protein']);
                $stmtNutrition->bindParam(':fat', $nutritionValues['fat']);
                $stmtNutrition->bindParam(':carbs', $nutritionValues['carbs']);
                $stmtNutrition->bindParam(':sugar', $nutritionValues['sugar']);
                $stmtNutrition->bindParam(':fiber', $nutritionValues['fiber']);
                $stmtNutrition->bindParam(':sodium', $nutritionValues['sodium']);
                $stmtNutrition->bindParam(':potassium', $nutritionValues['potassium']);
                $stmtNutrition->bindParam(':magnesium', $nutritionValues['magnesium']);
                $stmtNutrition->bindParam(':calcium', $nutritionValues['calcium']);
                $stmtNutrition->execute();
                $nutritionValuesId = $stmtNutrition->fetch(PDO::FETCH_ASSOC)['id'];
        
                // Wstawianie danych do tabeli meals z kluczami obcymi meal_details_id i nutrition_values_id
                $stmtMeals = $conn->prepare("INSERT INTO meals (category, meal_name, description, ingredients, preparation, meal_details_id, nutrition_values_id, image) VALUES (:category, :meal_name, :description, :ingredients, :preparation, :meal_details_id, :nutrition_values_id, :image)");
                $stmtMeals->bindParam(':category', $item['category']);
                $stmtMeals->bindParam(':meal_name', $item['meal_name']);
                $stmtMeals->bindParam(':description', $item['description']);
                $stmtMeals->bindParam(':ingredients', $item['ingredients']);
                $stmtMeals->bindParam(':preparation', $item['preparation']);
                $stmtMeals->bindParam(':meal_details_id', $mealDetailsId);
                $stmtMeals->bindParam(':nutrition_values_id', $nutritionValuesId);
                $stmtMeals->bindParam(':image', $item['image']);
                $stmtMeals->execute();
            }
            echo json_encode(['status' => 'success', 'message' => 'Dane zostały pomyślnie zapisane do bazy danych.']);
        }
        catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
        }
        catch (PDOException $e) {
        error_log($e->getMessage());
        throw $e;
        }
        catch (Exception $e) {
            // Wycofanie w przypadku błędu
            echo json_encode(['status' => 'error', 'message' => 'Wystąpił błąd podczas zapisu danych: ' . $e->getMessage()]);
        } finally {
            if ($conn) { //zamykanie połączenia 
                $conn = null;
            }
        }
    }
}