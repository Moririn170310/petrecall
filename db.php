<?php
// env.php: データベース接続設定
$username = "root";         // MySQLのユーザー名
$password = "";             // MySQLのパスワード
$db_name = "pet_db";
$host = "localhost";

// DB接続設定（MySQL）
$dsn = "mysql:host={$host};dbname={$db_name};charset=utf8";  // MySQLのホスト、データベース名、文字コード

try {
    // PDOを使ってMySQLに接続
    $pdo = new PDO($dsn, $username, $password);
    // エラーモードを例外に設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // CREATE TABLEクエリ
    $createTableSql = "
    CREATE TABLE IF NOT EXISTS users (
        ID INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        DB_PASSWORD VARCHAR(255) NOT NULL,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );
    ";

    // クエリ実行
    $pdo->exec($createTableSql);
    echo "テーブル 'users' が正常に作成されました。";

} catch (PDOException $e) {
    echo '接続失敗: ' . $e->getMessage();
    exit;
}
