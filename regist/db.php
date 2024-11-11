<?php
// DB接続設定（SQLite）
$dsn = 'sqlite:pet.db';  // pet.dbという名前のSQLiteデータベースファイル
$username = null;         // SQLiteはユーザー名が不要
$password = null;         // SQLiteはパスワードが不要

try {
    // PDOを使ってSQLiteに接続
    $pdo = new PDO($dsn, $username, $password);
    // エラーモードを例外に設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo '接続失敗: ' . $e->getMessage();
}
?>
