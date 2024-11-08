<?php
// SQLiteデータベースへの接続
$dsn = 'sqlite:pet.db';
try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // テーブルが存在しない場合は作成
    $pdo->exec("CREATE TABLE IF NOT EXISTS pets (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        dog_name TEXT,
        user_name TEXT,
        email TEXT,
        password TEXT,
        address TEXT,
        phone TEXT,
        image BLOB
    )");
} catch (PDOException $e) {
    echo "接続エラー: " . $e->getMessage();
    exit;
}
?>
