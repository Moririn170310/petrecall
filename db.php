<?php
$host = 'localhost';  // MySQLサーバーのホスト名
$dbname = 'pet_db';  // 使用するデータベース名
$username = 'root';  // MySQLのユーザー名
$password = '';      // MySQLのパスワード

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "データベース接続エラー: " . $e->getMessage();
    exit;
}
?>
