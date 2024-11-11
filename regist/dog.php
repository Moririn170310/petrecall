<?php
// dog.php

// データベース接続
require 'db.php';

// ペット情報の取得
$stmt = $pdo->query("SELECT * FROM pets WHERE dog_name LIKE '%犬%'");
$pets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬の詳細</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-gray-800">犬の詳細</h1>
        </div>
    </header>
    
    <main class="py-8">
        <div class="max-w-7xl mx-auto px-4">
            <?php foreach ($pets as $pet): ?>
                <div class="bg-white shadow-lg p-6 rounded-lg mb-6">
                    <h2 class="text-2xl font-semibold"><?php echo htmlspecialchars($pet['dog_name']); ?></h2>
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($pet['dog_image']); ?>" alt="犬の画像" class="w-full h-64 object-cover rounded-md my-4">
                    <p><strong>飼い主:</strong> <?php echo htmlspecialchars($pet['user_name']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($pet['email']); ?></p>
                    <p><strong>住所:</strong> <?php echo htmlspecialchars($pet['address']); ?></p>
                    <p><strong>電話:</strong> <?php echo htmlspecialchars($pet['phone']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
