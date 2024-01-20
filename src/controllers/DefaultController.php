<?php

require_once 'AppController.php';

class DefaultController extends AppController {
    public function index() {
        $this->render('index');
    }
    public function login() {
        $this->render('login');
    }
    public function register() {
        $this->render('register');
    }
    public function recipe() {
        $this->render('recipe');
    }
    public function favourites() {
        $this->render('favourites');
    }
    public function example() {
        $this->render('example');
    }
    public function brekfast() {
        $this->render('brekfast');
    }
    public function lunch() {
        $this->render('lunch');
    }
    public function dinner() {
        $this->render('dinner');
    }
    public function snack() {
        $this->render('snack');
    } 
}