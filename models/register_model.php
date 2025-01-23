<?php
require "core/db_connection.php";

$registererrors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['vorname'])) {
        $firstname = htmlspecialchars(trim($_POST['vorname'])) ?? '';
    }
    if (isset($_POST['nachname'])) {
        $lastname = htmlspecialchars(trim($_POST['nachname'])) ?? '';
    }
    if (isset($_POST['email'])) {
        $email = htmlspecialchars(trim($_POST['email'])) ?? '';
    }
    if (isset($_POST['passwort'])) {
        $password = password_hash(trim($_POST['passwort']), PASSWORD_DEFAULT);
    }

    if ($firstname === '') {
        $registererrors[] = 'Bitte geben Sie Ihren Vornamen an.';
    }
    if ($lastname === '') {
        $registererrors[] = 'Bitte geben Sie Ihren Nachnamen an.';
    }
    if ($email === '') {
        $registererrors[] = 'Bitte geben Sie ihre Email an.';
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $registererrors[] = 'Bitte geben Sie eine gültige Email-Adresse an.';
    }
    if ($password === '') {
        $registererrors[] = 'Bitte geben Sie ein Passwort ein.';
    } 
    
    if (!$registererrors) {
    $db = connectToMyDatabase();     
    $stmt = $db->prepare("INSERT INTO `onlyyou_login` (Vorname, Nachname, Email, Passwort) VALUES(:vorname, :lastname, :email, :passwort)");
    $stmt->execute([':vorname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':passwort' => $password]);
    }    
}