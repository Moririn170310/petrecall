<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント管理</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">アカウント管理</h1>
        <p>アカウントの詳細をここで管理できます。</p>
        <div class="mt-6">
            <h2 class="text-xl font-semibold">ユーザ情報</h2>
            <p>ユーザ名: user123</p>
            <p>Email: example@example.com</p>
        </div>
        <button class="mt-4 bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">情報を更新</button>
        <nav class="mt-6">
            <a href="home.php" class="text-blue-500 hover:underline">ホーム</a> | 
            <a href="search.php" class="text-blue-500 hover:underline">検索画面</a> | 
            <a href="map.php" class="text-blue-500 hover:underline">マップ</a>
        </nav>
    </div>
</body>

</html>
