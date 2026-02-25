<?php

namespace CampusBuddy\Src;

use PDO;
use PDOException;

class Database
{
    public static function pdo(): PDO
    {
        require_once __DIR__ . '/Config.php';

        $host = Config::DB_HOST;
        $dbname = Config::DB_NAME;
        $username = Config::DB_USER;
        $password = Config::DB_PASS;

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
