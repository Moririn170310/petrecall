<?php
include 'db.php';

// ペット情報をデータベースから取得
$stmt = $pdo->query("SELECT * FROM pets");
$pets = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬の一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <h2 class="text-2xl font-bold mb-6 text-center">犬の一覧</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($pets as $pet): ?>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="<?php echo $pet['dog_image']; ?>" alt="犬の画像" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold"><?php echo $pet['dog_name']; ?></h3>
                <p class="text-gray-600"><?php echo $pet['user_name']; ?></p>
                <p class="text-gray-600"><?php echo $pet['address']; ?></p>
                <a href="detail.php?id=<?php echo $pet['id']; ?>" class="text-blue-500 hover:text-blue-700 mt-2 inline-block">詳細</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
