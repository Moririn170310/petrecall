<?php
// データベース接続
$conn = new mysqli("localhost", "user", "password", "database_name");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $breed = $_POST['breed'];
    $description = $_POST['description'];
    $imagePath = '';

    // 画像アップロード処理
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $name . '_' . time() . '.jpg';
        $destPath = 'uploads/' . $fileName;
        
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            $imagePath = $destPath;
        } else {
            echo "画像のアップロードに失敗しました。";
        }
    }

    // データベースに挿入
    $stmt = $conn->prepare("INSERT INTO pets (name, category, breed, image_path, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $category, $breed, $imagePath, $description);
    $stmt->execute();
    $stmt->close();

    echo "ペット情報が登録されました！";
}
?>

<form action="pet_register.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="ペットの名前" required>
    <select name="category">
        <option value="犬">犬</option>
        <option value="猫">猫</option>
        <option value="鳥">鳥</option>
        <option value="その他">その他</option>
        <option value="迷子">迷子</option>
    </select>
    <input type="text" name="breed" placeholder="ペットの種類">
    <textarea name="description" placeholder="説明"></textarea>
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">登録</button>
</form>
