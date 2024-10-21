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
        <h2 class="text-2xl font-bold mb-6 text-center">犬の登録</h2>
        <form action="confirm.php" method="post">
            <div class="mb-4">
                <label class="block text-gray-700">犬の名前</label>
                <input type="text" class="mt-1 block w-full p-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">ユーザ名</label>
                <input type="text" class="mt-1 block w-full p-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" class="mt-1 block w-full p-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">パスワード</label>
                <input type="password" class="mt-1 block w-full p-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">犬の画像</label>
                <input type="file" class="mt-1 block w-full p-2 border rounded-md" accept="image/*">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">住所</label>
                <input type="text" class="mt-1 block w-full p-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">電話番号</label>
                <input type="tel" class="mt-1 block w-full p-2 border rounded-md">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">登録</button>
        </form>
    </div>
</body>

</html>
