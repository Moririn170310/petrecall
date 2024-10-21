<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マップ</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">位置情報マップ</h1>
        <div id="map"></div>
        <nav class="mt-6">
            <a href="home.php" class="text-blue-500 hover:underline">ホーム</a> | 
            <a href="search.php" class="text-blue-500 hover:underline">検索画面</a> | 
            <a href="account.php" class="text-blue-500 hover:underline">アカウント管理</a>
        </nav>
    </div>
    <script>
        // Google Maps APIを使ってマップを表示するコードをここに追加
        function initMap() {
            const location = { lat: 35.6762, lng: 139.6503 }; // 東京
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: location,
            });
            new google.maps.Marker({
                position: location,
                map: map,
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>

</html>
