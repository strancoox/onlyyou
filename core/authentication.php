<?php 
session_start();

function login($user) {
    $_SESSION["user"] = $user;
}

function logout() {
    session_unset();
    session_destroy();
}

function isLoggedIn() {
    if (isset($_SESSION["user"])) {
        if (strlen($_SESSION["user"]) > 0) {
            return true;
        }
    }

    return false;
}

function getUserEmail() {
    if (isset($_SESSION["user"])) {
        return $_SESSION["user"];
    }
    else {
        return "";
    }
}