<?php 
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['age'])) {
        $age = trim($_POST['age']) ?? '';
    }
    if (isset($_POST['weight'])) {
        $weight = trim($_POST['weight']) ?? '';
    }
    if (isset($_POST['circle'])) {
        $goal = trim($_POST['circle']) ?? '';
    }
    if (isset($_POST['trainingcount'])) {
        $days = trim($_POST['trainingcount']) ?? '';
    }
    
    if ($age === '' || !is_numeric($age) || $age < 16 || $age > 100) {
        $errors[] = 'Bitte gib ein gültiges Alter an.';
    }
    if ($weight === '' || !is_numeric($weight) || $weight > 300 || $weight < 30) {
        $errors[] = 'Bitte gib ein gültiges Gewicht zwischen 30 und 300 KG an.';
    }
    if ($goal === '') {
        $errors[] = 'Bitte wähle ein Trainingsziel aus.';
    }
    if ($days === '' || !is_numeric($days) || $days < 2 || $days > 6) {
        $errors[] = 'Bitte wähle eine gültige Anzahl von Trainingstagen.';
    }
}
    
