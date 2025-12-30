<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'school_management');
define('DB_USER', 'root');
define('DB_PASS', '');

function getConnection() {
    $host = "localhost";
    $dbname = "school_management";
    $user = "root";
    $password = "";
    try {
        $dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=utf8mb4";
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
getConnection();
?>