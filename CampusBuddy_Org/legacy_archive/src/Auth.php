<?php

namespace CampusBuddy\Src;

use PDO;

class Auth
{
    public static function attempt(PDO $pdo, string $login, string $password): ?array
    {
        // Assuming 'cr_users' table based on config/auth.php
        $stmt = $pdo->prepare("SELECT * FROM cr_users WHERE email = ?");
        $stmt->execute([$login]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Map user fields to what session expects
            return [
                'id' => $user['id'],
                'full_name' => $user['name'],
                'email' => $user['email'],
                'user_type' => $user['role'] ?? 'student',
            ];
        }

        return null;
    }
}
