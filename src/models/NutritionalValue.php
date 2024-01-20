<?php

class NutritionalValues {
    // private $id;
    private $totalCalories;
    private $protein;
    private $fat;
    private $carbs;
    private $sugar;
    private $fiber;
    private $sodium;
    private $potassium;
    private $magnesium;
    private $calcium;

    public function __construct(
        // $id,
        $totalCalories,
        $protein,
        $fat,
        $carbs,
        $sugar,
        $fiber,
        $sodium,
        $potassium,
        $magnesium,
        $calcium
    ) {
        // $this->id = $id;
        $this->totalCalories = $totalCalories;
        $this->protein = $protein;
        $this->fat = $fat;
        $this->carbs = $carbs;
        $this->sugar = $sugar;
        $this->fiber = $fiber;
        $this->sodium = $sodium;
        $this->potassium = $potassium;
        $this->magnesium = $magnesium;
        $this->calcium = $calcium;
    }

    // Gettery i settery
    // public function getId() {
    //     return $this->id;
    // }

    // public function setId($id) {
    //     $this->id = $id;
    // }

    public function getTotalCalories() {
        return $this->totalCalories;
    }

    public function setTotalCalories($totalCalories) {
        $this->totalCalories = $totalCalories;
    }

    public function getProtein() {
        return $this->protein;
    }

    public function setProtein($protein) {
        $this->protein = $protein;
    }

    public function getFat() {
        return $this->fat;
    }

    public function setFat($fat) {
        $this->fat = $fat;
    }

    public function getCarbs() {
        return $this->carbs;
    }

    public function setCarbs($carbs) {
        $this->carbs = $carbs;
    }

    public function getSugar() {
        return $this->sugar;
    }

    public function setSugar($sugar) {
        $this->sugar = $sugar;
    }

    public function getFiber() {
        return $this->fiber;
    }

    public function setFiber($fiber) {
        $this->fiber = $fiber;
    }

    public function getSodium() {
        return $this->sodium;
    }

    public function setSodium($sodium) {
        $this->sodium = $sodium;
    }

    public function getPotassium() {
        return $this->potassium;
    }

    public function setPotassium($potassium) {
        $this->potassium = $potassium;
    }

    public function getMagnesium() {
        return $this->magnesium;
    }

    public function setMagnesium($magnesium) {
        $this->magnesium = $magnesium;
    }

    public function getCalcium() {
        return $this->calcium;
    }

    public function setCalcium($calcium) {
        $this->calcium = $calcium;
    }
}

?>
