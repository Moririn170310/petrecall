<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬の登録確認画面</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">犬の登録確認</h2>
        <div class="mb-4">
            <strong class="block text-gray-700">犬の名前:</strong>
            <p class="mt-1 text-gray-600">バディ</p>
        </div>
        <div class="mb-4">
            <strong class="block text-gray-700">ユーザ名:</strong>
            <p class="mt-1 text-gray-600">user123</p>
        </div>
        <div class="mb-4">
            <strong class="block text-gray-700">Email:</strong>
            <p class="mt-1 text-gray-600">example@example.com</p>
        </div>
        <div class="mb-4">
            <strong class="block text-gray-700">パスワード:</strong>
            <p class="mt-1 text-gray-600">********</p>
        </div>
        <div class="mb-4">
            <strong class="block text-gray-700">犬の画像:</strong>
            <img src="path/to/dog-image.jpg" alt="犬の画像" class="mt-2 w-full h-auto rounded-md">
        </div>
        <div class="mb-4">
            <strong class="block text-gray-700">住所:</strong>
            <p class="mt-1 text-gray-600">東京都新宿区1-1-1</p>
        </div>
        <div class="mb-4">
            <strong class="block text-gray-700">電話番号:</strong>
            <p class="mt-1 text-gray-600">090-1234-5678</p>
        </div>
        <div class="flex justify-between mt-6">
            <button onclick="location.href='index.php'" class="bg-gray-300 text-gray-800 p-2 rounded-md hover:bg-gray-400">戻る</button>
            <button onclick="location.href='home.php'" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">登録</button>
        </div>    
    </div>
</body>

</html>
