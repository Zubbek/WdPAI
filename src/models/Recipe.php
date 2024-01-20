<?php
require_once 'RecipeDetails.php';
require_once 'NutritionalValue.php';

class Recipe {
    // private $id;
    private $category;
    private $mealName;
    private $description;
    private $ingredients;
    private $preparation;
    // private $userId;
    private $mealDetails; // Instancja klasy MealDetails
    private $nutritionalValues; // Instancja klasy NutritionalValues

    public function __construct($category, $mealName, $description, $ingredients, $preparation, MealDetails $mealDetails, NutritionalValues $nutritionalValues) {
        // $this->id = $id;
        $this->category = $category;
        $this->mealName = $mealName;
        $this->description = $description;
        $this->ingredients = $ingredients;
        $this->preparation = $preparation;
        // $this->userId = $userId;
        $this->mealDetails = $mealDetails;
        $this->nutritionalValues = $nutritionalValues;
    }

    // Gettery i settery
    // public function getId() {
    //     return $this->id;
    // }

    // public function setId($id) {
    //     $this->id = $id;
    // }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getMealName() {
        return $this->mealName;
    }

    public function setMealName($mealName) {
        $this->mealName = $mealName;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    public function setIngredients($ingredients) {
        $this->ingredients = $ingredients;
    }

    public function getPreparation() {
        return $this->preparation;
    }

    public function setPreparation($preparation) {
        $this->preparation = $preparation;
    }

    // public function getUserId() {
    //     return $this->userId;
    // }

    // public function setUserId($userId) {
    //     $this->userId = $userId;
    // }

    public function getMealDetails() {
        return $this->mealDetails;
    }

    public function setMealDetails(MealDetails $mealDetails) {
        $this->mealDetails = $mealDetails;
    }

    public function getNutritionalValues() {
        return $this->nutritionalValues;
    }

    public function setNutritionalValues(NutritionalValues $nutritionalValues) {
        $this->nutritionalValues = $nutritionalValues;
    }
}

?>
