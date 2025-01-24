<?php 
$errors = [];
$plan = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Eingabe
    if (isset($_POST['age'])) {
        $age = htmlspecialchars(trim($_POST['age'])) ?? '';
    }
    if (isset($_POST['weight'])) {
        $weight = htmlspecialchars(trim($_POST['weight'])) ?? '';
    }
    if (isset($_POST['circle'])) {
        $goal = trim($_POST['circle']) ?? '';
    }
    if (isset($_POST['trainingcount'])) {
        $days = htmlspecialchars(trim($_POST['trainingcount'])) ?? '';
    }
    // Fehlerüberprüfung
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

    if (empty($errors)) {
        require 'core/plans.php';
        $plan = createTrainingplan($age, $weight, $goal, $days);
        return $plan;
    }  
}