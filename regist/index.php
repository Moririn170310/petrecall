<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ペット検索システム</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .hidden {
      display: none;
    }
  </style>
</head>
<body class="bg-gray-100">
  <!-- ヘッダー -->
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
      <h1 class="text-3xl font-bold text-gray-800">ペット検索システム</h1>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="index.php" class="text-gray-600 hover:text-blue-500">ホーム</a></li> <!-- ホームリンク -->
          <li><a href="list.php" class="text-gray-600 hover:text-blue-500">ペット一覧</a></li> <!-- ペット一覧リンクを追加 -->
          <li><a href="regist.php" class="text-gray-600 hover:text-blue-500">ペット登録</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- メインコンテンツ -->
  <main class="mt-8">
    <div class="max-w-7xl mx-auto px-4">

      <!-- 検索バー -->
      <section class="text-center my-8">
        <h2 class="text-4xl font-semibold text-gray-800">迷子のペットを見つけよう</h2>
        <p class="text-gray-500 mt-2">種類や特徴でペットを検索できます</p>
        <div class="mt-6 flex justify-center">
          <input id="searchInput" type="text" placeholder="犬、猫、鳥..." class="w-2/3 md:w-1/2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
          <button onclick="searchPets()" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">検索</button>
        </div>
      </section>

      <!-- カテゴリセクション -->
      <section class="my-12" id="petCategories">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">ペットのカテゴリ</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-white p-6 rounded-lg shadow pet-card" data-name="犬">
            <img src="https://via.placeholder.com/150" alt="犬" class="w-full h-32 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-4">犬</h3>
            <p class="text-gray-500 mt-2">様々な種類の犬を検索できます</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow pet-card" data-name="猫">
            <img src="https://via.placeholder.com/150" alt="猫" class="w-full h-32 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-4">猫</h3>
            <p class="text-gray-500 mt-2">猫の里親探しに役立つ情報が満載</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow pet-card" data-name="鳥">
            <img src="https://via.placeholder.com/150" alt="鳥" class="w-full h-32 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-4">鳥</h3>
            <p class="text-gray-500 mt-2">鳥の種類ごとの情報が充実</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow pet-card" data-name="その他のペット">
            <img src="https://via.placeholder.com/150" alt="その他のペット" class="w-full h-32 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-4">その他のペット</h3>
            <p class="text-gray-500 mt-2">珍しいペットの情報はこちら</p>
          </div>
        </div>
      </section>

      <!-- 人気ペットセクション -->
      <section class="my-12">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">迷子のペット</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-white p-6 rounded-lg shadow pet-card" data-name="ポメラニアン">
            <img src="https://via.placeholder.com/300" alt="ペット1" class="w-full h-48 object-cover rounded-md">
            <h3 class="text-2xl font-semibold mt-4">ポメラニアン</h3>
            <p class="text-gray-500 mt-2"></p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow pet-card" data-name="スコティッシュフォールド">
            <img src="https://via.placeholder.com/300" alt="ペット2" class="w-full h-48 object-cover rounded-md">
            <h3 class="text-2xl font-semibold mt-4">スコティッシュフォールド</h3>
            <p class="text-gray-500 mt-2"></p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow pet-card" data-name="オカメインコ">
            <img src="https://via.placeholder.com/300" alt="ペット3" class="w-full h-48 object-cover rounded-md">
            <h3 class="text-2xl font-semibold mt-4">オカメインコ</h3>
            <p class="text-gray-500 mt-2"></p>
          </div>
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

  <script>
    function searchPets() {
      const input = document.getElementById('searchInput').value.toLowerCase();
      const petCards = document.querySelectorAll('.pet-card');

      petCards.forEach(card => {
        const petName = card.getAttribute('data-name').toLowerCase();
        if (petName.includes(input)) {
          card.classList.remove('hidden');
        } else {
          card.classList.add('hidden');
        }
      });
    }
  </script>
</body>
</html>
