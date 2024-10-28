<?php
// 犬と猫のデータ（例として配列を使用）
$pets = [
    [
        'type' => '犬',
        'name' => 'ポメラニアン',
        'description' => '小型で愛らしい犬です。',
        'image' => 'https://via.placeholder.com/150?text=ポメラニアン'
    ],
    [
        'type' => '犬',
        'name' => 'ゴールデンレトリバー',
        'description' => '友好的で賢い犬です。',
        'image' => 'https://via.placeholder.com/150?text=ゴールデンレトリバー'
    ],
    [
        'type' => '猫',
        'name' => 'スコティッシュフォールド',
        'description' => '丸い耳が特徴の猫です。',
        'image' => 'https://via.placeholder.com/150?text=スコティッシュフォールド'
    ],
    [
        'type' => '猫',
        'name' => 'アメリカンショートヘア',
        'description' => '短毛で活発な猫です。',
        'image' => 'https://via.placeholder.com/150?text=アメリカンショートヘア'
    ],
];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ペット一覧</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- ヘッダー -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">ペット一覧</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="index.php" class="text-gray-600 hover:text-blue-500">ホーム</a></li>
                    <li><a href="list.php" class="text-gray-600 hover:text-blue-500">ペット一覧</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- メインコンテンツ -->
    <main class="mt-8">
        <div class="max-w-7xl mx-auto px-4">

            <!-- ペットリスト -->
            <section class="my-12">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">犬と猫の一覧</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($pets as $pet): ?>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <img src="<?php echo $pet['image']; ?>" alt="<?php echo $pet['name']; ?>" class="w-full h-32 object-cover rounded-md">
                        <h3 class="text-xl font-semibold mt-4"><?php echo $pet['name']; ?></h3>
                        <p class="text-gray-500 mt-2"><?php echo $pet['description']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>

    <!-- フッター -->
    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2024 ペット検索システム. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
