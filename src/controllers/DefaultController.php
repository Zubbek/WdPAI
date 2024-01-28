<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/FetchAndSaveDataRepository.php';

class DefaultController extends AppController {
    
    public function gluco() {
        $fetchRepository = new FetchAndSaveDataRepository();
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
            if ($contentType === "application/json"){
                $content = trim(file_get_contents("php://input"));
                $decoded = json_decode($content, true);
                if (!is_array($decoded)) {
                    echo json_encode(['status' => 'error', 'message' => 'Przekazane dane nie są tablicą bajo bongo.']);
                    return;
                }
     
                $fetchRepository->saveDataFromApi($decoded);
                echo json_encode(['message' => 'Dane zostały zapisane']);
            }
            else { 
                echo json_encode(['message' => 'Dane nie zostały zapisane - brak danych JSON']);
            }
        $this->render('gluco');
    }

    public function login() {
        $this->render('login');
    }

    public function register() {
        $this->render('register');
    }
}