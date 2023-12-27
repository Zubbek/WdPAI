<?php

require_once 'AppController.php';
require_once '../models/User.php';

class SecurityController extends AppController {

    public function login() {
        $user = new User("jan.kowalski@gmail.com", "admin1234", "Jan", "Kowalski");
        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($user->$_GET != $email) {
            die("404");
        }
        if ($user->$_GET != $password) {
            die("404");
        }
        $this->view->render("security/login");

    }
}