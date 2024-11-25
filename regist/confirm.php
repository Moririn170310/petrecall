<?php
require_once "../models/Animal.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // POSTデータを取得
    $posts = $_POST;

    $animal = new Animal();
    $animalData = $animal->fetch($posts['animal_id']);

    // 画像のアップロード処理
    if (isset($_FILES['image'])) {
        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];

        // UUID風の画像名を生成
        $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);  // 画像の拡張子を取得
        $uniqueImageName = uniqid('pet_', true) . '.' . $imageExtension;  // UUID風の名前を生成

        $imagePath = '../uploads/' . $uniqueImageName;
        $posts['image_name'] = $uniqueImageName;

        if (move_uploaded_file($imageTmpName, $imagePath)) {
            // 画像のアップロード成功
            // $image = file_get_contents($_FILES['image']['tmp_name']);
        } else {
            echo "画像のアップロードに失敗しました。";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ペットの登録確認画面</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">ペットの登録確認</h2>
        <form action="add.php" method="post">
            <div class="mb-4">
                <strong class="block text-gray-700">ペットの名前:</strong>
                <p class="mt-1 text-gray-600"><?= $posts['name'] ?></p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">ペットの種類:</strong>
                <p class="mt-1 text-gray-600"><?= $animalData['name'] ?></p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">ペットの画像:</strong>
                <img src="<?= $imagePath ?>" alt="画像" class="mt-2 w-full h-auto rounded-md">
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">説明:</strong>
                <p class="mt-1 text-gray-600"><?= nl2br($posts['description']) ?></p>
            </div>

            <div class="flex justify-between mt-6">
                <a href="./" class="bg-gray-300 text-gray-800 p-2 rounded-md hover:bg-gray-400">戻る</a>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">登録</button>
            </div>
            <input type="hidden" name="name" value="<?= $posts['name']; ?>">
            <input type="hidden" name="animal_id" value="<?= $posts['animal_id']; ?>">
            <input type="hidden" name="description" value="<?= $posts['description']; ?>">
            <input type="hidden" name="image_name" value="<?= $posts['image_name']; ?>">
        </form>
    </div>
</body>

</html>
