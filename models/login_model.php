<?php
require "core/db_connection.php";

$loginerrors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['passwort']);

    if ($email === '') {
        $loginerrors[] = 'Bitte geben Sie Ihre E-Mail-Adresse ein.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $loginerrors[] = 'Bitte geben Sie eine gültige E-Mail-Adresse ein.';
    }

    if ($password === '') {
        $loginerrors[] = 'Bitte geben Sie Ihr Passwort ein.';
    }

    if (!$loginerrors) {
        $db = connectToMyDatabase();

        $stmt = $db->prepare("SELECT Passwort FROM onlyyou_login WHERE Email = :email");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        login($email);

        header('Location: home');
    }
}
