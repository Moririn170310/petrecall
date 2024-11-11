<?php
// list.php

// データベース接続
require 'db.php';

// ペット情報の取得
$stmt = $pdo->query("SELECT * FROM pets");
$pets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録された犬の一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8 text-center">登録された犬の一覧</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($pets as $pet): ?>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($pet['dog_image']); ?>" alt="犬の画像" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-xl font-semibold"><?php echo htmlspecialchars($pet['dog_name']); ?></h2>
                    <p class="mt-2 text-gray-600"><?php echo htmlspecialchars($pet['user_name']); ?>さんの犬</p>
                    <p class="mt-2 text-gray-600">Email: <?php echo htmlspecialchars($pet['email']); ?></p>
                    <p class="mt-2 text-gray-600">住所: <?php echo htmlspecialchars($pet['address']); ?></p>
                    <p class="mt-2 text-gray-600">電話番号: <?php echo htmlspecialchars($pet['phone']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
