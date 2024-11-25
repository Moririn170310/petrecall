<?php
require_once "../models/Animal.php";

$animal = new Animal();
$animals = $animal->getList();

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬の登録画面</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">ペットの登録</h2>
        <form action="confirm.php" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block text-gray-700">ペットの名前</label>
                <input type="text" name="name" class="mt-1 block w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">ペットの種類</label>
                <select name="animal_id" id="animal_id" class="p-2 border border-gray-200 rounded-md">
                    <?php foreach ($animals as $value): ?>
                        <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">ペットの画像</label>
                <input type="file" name="image" class="mt-1 block w-full p-2 border rounded-md" accept="image/*" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">説明</label>
                <textarea name="description" class="mt-1 block w-full p-2 border rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">ユーザ名</label>
                <input type="text" name="user_name" class="mt-1 block w-full p-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="mt-1 block w-full p-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">パスワード</label>
                <input type="password" name="password" class="mt-1 block w-full p-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">住所</label>
                <input type="text" name="address" class="mt-1 block w-full p-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">電話番号</label>
                <input type="tel" name="phone" class="mt-1 block w-full p-2 border rounded-md">
            </div>
            
            <!-- ボタン部分のレイアウト修正 -->
            <div class="flex justify-between mt-6">
                <button type="submit" class="w-48 bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">登録</button>
                <a href="../" class="w-48 text-center bg-gray-300 text-black p-2 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400">戻る</a>
            </div>
        </form>
    </div>
</body>

</html>
