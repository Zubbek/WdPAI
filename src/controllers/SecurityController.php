<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController {

    public function home() {
        $user = new User('jan.kowalski@wp.pl', 'admin1234', 'Jan', 'Kowalski');
    
        // if ($this->isPost()) {
        //     return $this->render('login');
        // }
        // else {
        // Check if 'email' and 'password' have been posted
        if (isset($_POST["email-l"]) && isset($_POST["password-l"])) {
            $email = $_POST["email-l"];
            $password = $_POST["password-l"];
    
            if ($user->getEmail() != $email) {
                return $this->render('login', ['messages' => ['User with this email not exist :(']]);
            }
            if ($user->getPassword() != $password) {
                return $this->render('login', ['messages' => ['Wrong password :(']]);
            }
            if ($user->getEmail() === $email && $user->getPassword() === $password) {
                // Credentials are correct, render the home page
                return $this->render('home');
            }
        } 
        else if (isset($_POST["username-a"]) && isset($_POST["email-a"]) && isset($_POST["password-a"])) {
            $name = $_POST["username-a"];
            $email = $_POST["email-a"];
            $password = $_POST["password-a"];
            $user->setName($name);
            $user->setEmail($email);
            $user->setPassword($password);
            return $this->render('home');
        }
        // }
    }
}