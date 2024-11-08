<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームから送信されたデータを取得
    $dogName = $_POST['dog_name'];
    $userName = $_POST['user_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // パスワードのハッシュ化
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // 画像のアップロード処理
    if (isset($_FILES['dog_image'])) {
        $imageName = $_FILES['dog_image']['name'];
        $imageTmpName = $_FILES['dog_image']['tmp_name'];
        $imagePath = 'uploads/' . basename($imageName);
        
        if (move_uploaded_file($imageTmpName, $imagePath)) {
            // 画像のアップロード成功
            // データベースに保存
            $stmt = $pdo->prepare("INSERT INTO pets (dog_name, user_name, email, password, dog_image, address, phone) 
                                   VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$dogName, $userName, $email, $password, $imagePath, $address, $phone]);

            header('Location: confirm.php');
            exit;
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
    <title>犬の登録画面</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">犬の登録</h2>
        <form action="confirm.php" method="post" enctype="multipart/form-data">
    <div class="mb-4">
        <label class="block text-gray-700">犬の名前</label>
        <input type="text" name="dog_name" class="mt-1 block w-full p-2 border rounded-md" required>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">ユーザ名</label>
        <input type="text" name="user_name" class="mt-1 block w-full p-2 border rounded-md" required>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Email</label>
        <input type="email" name="email" class="mt-1 block w-full p-2 border rounded-md" required>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">パスワード</label>
        <input type="password" name="password" class="mt-1 block w-full p-2 border rounded-md" required>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">犬の画像</label>
        <input type="file" name="dog_image" class="mt-1 block w-full p-2 border rounded-md" accept="image/*" required>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">住所</label>
        <input type="text" name="address" class="mt-1 block w-full p-2 border rounded-md" required>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">電話番号</label>
        <input type="tel" name="phone" class="mt-1 block w-full p-2 border rounded-md" required>
    </div>
    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">登録</button>
</form>

    </div>
</body>
</html>
