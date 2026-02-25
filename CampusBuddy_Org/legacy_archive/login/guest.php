<?php

declare(strict_types=1);

session_start();

$_SESSION['user'] = [
    'id' => 0,
    'full_name' => 'Guest',
    'email' => 'guest@campusbuddy.com',
    'user_type' => 'guest'
];

header('Location: /CampusBuddy/Dashboard1/');
exit;
