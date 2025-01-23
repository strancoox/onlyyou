<?php
require "core/db_connection.php";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['vorname'])) {
        $firstname = trim($_POST['vorname']) ?? '';
    }
    if (isset($_POST['nachname'])) {
        $lastname = trim($_POST['nachname']) ?? '';
    }
    if (isset($_POST['email'])) {
        $email = trim($_POST['email']) ?? '';
    }
    if (isset($_POST['passwort'])) {
        $password = password_hash(trim($_POST['passwort']), PASSWORD_DEFAULT);
    }

    if ($firstname === '') {
        $errors[] = 'Bitte geben Sie Ihren Vornamen an.';
    }
    if ($lastname === '') {
        $errors[] = 'Bitte geben Sie Ihren Nachnamen an.';
    }
    if ($email === '') {
        $errors[] = 'Bitte geben Sie ihre Email an.';
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Bitte geben Sie eine gültige Email-Adresse an.';
    }
    if ($password === '') {
        $errors[] = 'Bitte geben ein Passwort ein.';
    } 
    
    if (!$errors) {
    $db = connectToMyDatabase();     
    $stmt = $db->prepare("INSERT INTO `onlyyou_login` (Vorname, Nachname, Email, Passwort) VALUES(:vorname, :lastname, :email, :passwort)");
    $stmt->execute([':vorname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':passwort' => $password]);
    }    
}