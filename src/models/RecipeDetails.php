<?php

class RecipeDetails {
    private $prepTime;
    private $cookTime;
    private $servings;

    public function __construct($prepTime, $cookTime, $servings) {
        $this->prepTime = $prepTime;
        $this->cookTime = $cookTime;
        $this->servings = $servings;
    }

    // Gettery i settery
    public function getPrepTime() {
        return $this->prepTime;
    }

    public function setPrepTime($prepTime) {
        $this->prepTime = $prepTime;
    }

    public function getCookTime() {
        return $this->cookTime;
    }

    public function setCookTime($cookTime) {
        $this->cookTime = $cookTime;
    }

    public function getServings() {
        return $this->servings;
    }

    public function setServings($servings) {
        $this->servings = $servings;
    }
}

?>
