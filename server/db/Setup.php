<?php
require_once(__DIR__ . '/Config.php');

class Setup
{
    public static function createDatebase(PDO $pdo)
    {
       $query = "CREATE DATABASE IF NOT EXISTS" . DB;
       $pdo->exec($query);
    }

    public static function createTable(PDO $pdo)
    {
        $query = "CREATE TABLE IF NOT EXISTS tasks (
        id INT AUTO_INCREMENT PRIMARY_KEY,
        description VARCHAR(500) NOT NULL,
        done BOOLEAN NOT NULL DEFAULT 0
        )";
        $pdo->exec($query);

        return $pdo;

    }
}