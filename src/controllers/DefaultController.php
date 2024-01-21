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
    public function favourites() {
        $this->render('favourites');
    }
    public function example() {
        $this->render('example');
    } 
}