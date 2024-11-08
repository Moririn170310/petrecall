<?php
$dsn = 'mysql:host=localhost;dbname=pet_database;charset=utf8';
$username = 'root';  // あなたのデータベースのユーザー名
$password = '';      // あなたのデータベースのパスワード

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>
