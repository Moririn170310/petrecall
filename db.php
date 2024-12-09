<?php
// env.php: データベース接続設定
$username = "root";         // MySQLのユーザー名
$password = "";             // MySQLのパスワード
$db_name = "pet_db";
$host = "localhost";

// DB接続設定（MySQL）
$dsn = "mysql:host={$host};dbname={$db_name};charset=utf8";

try {
    // PDOを使ってMySQLに接続
    $pdo = new PDO($dsn, $username, $password);
    // エラーモードを例外に設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // CREATE TABLEクエリ
    $createTablesSql = "
    CREATE TABLE IF NOT EXISTS users (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        is_resolved BOOLEAN DEFAULT NULL,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        address VARCHAR(255) DEFAULT NULL,
        phone VARCHAR(20) DEFAULT NULL,
        created_at DATETIME NOT NULL DEFAULT current_timestamp(),
        updated_at DATETIME NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

    CREATE TABLE IF NOT EXISTS pets (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        animal_id INT(11) NOT NULL,
        image_name VARCHAR(255) NOT NULL,
        description TEXT NOT NULL,
        user_id INT(11) DEFAULT NULL,
        created_at DATETIME NOT NULL DEFAULT current_timestamp(),
        updated_at DATETIME NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

    CREATE TABLE IF NOT EXISTS comments (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        pet_id INT(11) NOT NULL,
        user_id INT(11) DEFAULT NULL,
        image_name VARCHAR(255) DEFAULT NULL,
        comment TEXT NOT NULL,
        created_at DATETIME NOT NULL DEFAULT current_timestamp(),
        updated_at DATETIME NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
        FOREIGN KEY (pet_id) REFERENCES pets(id) ON DELETE CASCADE,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

    CREATE TABLE IF NOT EXISTS rewards (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        user_id INT(11) NOT NULL,
        pet_id INT(11) NOT NULL,
        amount INT(11) NOT NULL,
        is_payment BOOLEAN DEFAULT NULL,
        created_at DATETIME NOT NULL DEFAULT current_timestamp(),
        updated_at DATETIME NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
        FOREIGN KEY (pet_id) REFERENCES pets(id) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
    ";

    // クエリ実行
    $pdo->exec($createTablesSql);
    echo "テーブルが正常に作成されました。";

} catch (PDOException $e) {
    echo '接続失敗: ' . $e->getMessage();
    exit;
}
?>
