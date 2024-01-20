<?php
session_start();
// Usunięcie danych sesji
$_SESSION = array();

// Zniszczenie sesji
session_destroy();

// Przekierowanie na stronę logowania lub główną
header('Location: /');
exit;