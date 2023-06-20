<?php
session_start();
require_once('../src/controllers/Homepage.php');
require_once('../src/controllers/Cours.php');

try {
    
        homepage();
    
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo ($errorMessage);
}
