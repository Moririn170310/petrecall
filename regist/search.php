<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">検索</h1>
        <input type="text" placeholder="犬を検索..." class="block w-full p-2 border rounded-md mb-4">
        <button class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">検索</button>
        <div class="mt-6">
            <h2 class="text-xl font-semibold">検索結果</h2>
            <p>結果はここに表示されます。</p>
        </div>
        <nav class="mt-6">
            <a href="home.php" class="text-blue-500 hover:underline">ホーム</a> | 
            <a href="account.php" class="text-blue-500 hover:underline">アカウント管理</a> | 
            <a href="map.php" class="text-blue-500 hover:underline">マップ</a>
        </nav>
    </div>
</body>

</html>
