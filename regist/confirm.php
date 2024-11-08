<?php
// confirm.php

// POSTデータを取得
$dog_name = $_POST['dog_name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = $_POST['phone'];

// 画像の処理
if ($_FILES['dog_image']['error'] === UPLOAD_ERR_OK) {
    $dog_image = file_get_contents($_FILES['dog_image']['tmp_name']);
} else {
    die("画像のアップロードに失敗しました");
}
?>

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
        <form action="register_pet.php" method="post">
            <div class="mb-4">
                <strong class="block text-gray-700">犬の名前:</strong>
                <p class="mt-1 text-gray-600"><?php echo htmlspecialchars($dog_name); ?></p>
            </div>
            <div class="mb-4">
                <strong class="block text-gray-700">ユーザ名:</strong>
                <p class="mt-1 text-gray-600"><?php echo htmlspecialchars($user_name); ?></p>
            </div>
            <div class="mb-4">
                <strong class="block text-gray-700">Email:</strong>
                <p class="mt-1 text-gray-600"><?php echo htmlspecialchars($email); ?></p>
            </div>
            <div class="mb-4">
                <strong class="block text-gray-700">犬の画像:</strong>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($dog_image); ?>" alt="犬の画像" class="mt-2 w-full h-auto rounded-md">
            </div>
            <div class="mb-4">
                <strong class="block text-gray-700">住所:</strong>
                <p class="mt-1 text-gray-600"><?php echo htmlspecialchars($address); ?></p>
            </div>
            <div class="mb-4">
                <strong class="block text-gray-700">電話番号:</strong>
                <p class="mt-1 text-gray-600"><?php echo htmlspecialchars($phone); ?></p>
            </div>
            <div class="flex justify-between mt-6">
                <button onclick="location.href='regist.php'" class="bg-gray-300 text-gray-800 p-2 rounded-md hover:bg-gray-400">戻る</button>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">登録</button>
            </div>
            <input type="hidden" name="dog_name" value="<?php echo htmlspecialchars($dog_name); ?>">
            <input type="hidden" name="user_name" value="<?php echo htmlspecialchars($user_name); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <input type="hidden" name="password" value="<?php echo htmlspecialchars($password); ?>">
            <input type="hidden" name="address" value="<?php echo htmlspecialchars($address); ?>">
            <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
            <input type="hidden" name="dog_image" value="<?php echo base64_encode($dog_image); ?>">
        </form>
    </div>
</body>
</html>
