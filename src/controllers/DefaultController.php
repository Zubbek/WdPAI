<?php

require_once 'AppController.php';

class DefaultController extends AppController {
    public function index() {
        //TODO dislpay loogin.html
        //die("index method");
        $this->render('index');
    }

    public function login() {
        //TODO display projects.html
        //die("projects method");
        $this->render('login');
    }

    public function account() {
        //TODO display projects.html
        //die("projects method");
        $this->render('account');
    }

    public function recipe() {
        //TODO display projects.html
        //die("projects method");
        $this->render('recipe');
    }
    public function home() {
        //TODO display projects.html
        //die("projects method");
        $this->render('home');
    }
    public function favourites() {
        //TODO display projects.html
        //die("projects method");
        $this->render('favourites');
    }
    public function brekfast() {
        //TODO display projects.html
        //die("projects method");
        $this->render('brekfast');
    }
    public function lunch() {
        //TODO display projects.html
        //die("projects method");
        $this->render('lunch');
    }
    public function dinner() {
        //TODO display projects.html
        //die("projects method");
        $this->render('dinner');
    }
    public function snack() {
        //TODO display projects.html
        //die("projects method");
        $this->render('snack');
    }
    
}