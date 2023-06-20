<?php
session_start();
require_once('../src/controllers/Homepage.php');
require_once('../src/controllers/Cours.php');
require_once('../src/controllers/Addcours.php');

try {
    if (isset($_GET['action']) && $_GET['action']) {
        if ($_GET['action'] === 'addcours') {
            var_dump(2);
            addCours();
        } 
    } else{
        var_dump(1);
        homepage();
        }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo ($errorMessage);
}