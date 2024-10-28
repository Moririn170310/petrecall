<?php
$pets = [
    [
        'name' => 'ポメラニアン',
        'description' => '小型で愛らしい犬です。',
        'image' => 'https://via.placeholder.com/300?text=ポメラニアン'
    ],
    [
        'name' => 'ゴールデンレトリバー',
        'description' => '友好的で賢い犬です。',
        'image' => 'https://via.placeholder.com/300?text=ゴールデンレトリバー'
    ],
];
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

  <main class="mt-8">
    <div class="max-w-7xl mx-auto px-4">
      <section class="my-12">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">犬の種類</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <?php foreach ($pets as $pet): ?>
          <div class="bg-white p-6 rounded-lg shadow">
            <img src="<?php echo $pet['image']; ?>" alt="<?php echo $pet['name']; ?>" class="w-full h-48 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-4"><?php echo $pet['name']; ?></h3>
            <p class="text-gray-500 mt-2"><?php echo $pet['description']; ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </main>

  <footer class="bg-gray-800 text-white py-6 mt-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <p>&copy; 2024 ペット検索システム. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
