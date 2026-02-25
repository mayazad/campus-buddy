<?php

require_once 'database.php';



// Session management

if (session_status() === PHP_SESSION_NONE) {

    session_start();

}



// User authentication functions

function login($email, $password) {

    global $pdo;

    

    $stmt = $pdo->prepare("SELECT * FROM cr_users WHERE email = ?");

    $stmt->execute([$email]);

    $user = $stmt->fetch();

    

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user_id'] = $user['id'];

        $_SESSION['user_email'] = $user['email'];

        $_SESSION['user_name'] = $user['name'];

        $_SESSION['user_role'] = $user['role'];

        return true;

    }

    return false;

}



function logout() {

    session_destroy();

    header('Location: login.php');

    exit();

}



function isLoggedIn() {

    return isset($_SESSION['user_id']);

}



function getCurrentUser() {

    if (!isLoggedIn()) {

        return null;

    }

    

    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM cr_users WHERE id = ?");

    $stmt->execute([$_SESSION['user_id']]);

    return $stmt->fetch();

}



function requireLogin() {

    if (!isLoggedIn()) {

        header('Location: login.php');

        exit();

    }

}



function requireAdmin() {

    if (!isLoggedIn() || $_SESSION['user_role'] !== 'admin') {

        header('Location: index.php');

        exit();

    }

}

?>

