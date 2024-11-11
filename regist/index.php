<?php
// データベース接続
$conn = new mysqli("localhost", "user", "password", "database_name");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$query = "SELECT * FROM pets ORDER BY created_at DESC";
$result = $conn->query($query);

echo '<div class="navbar">
    <a href="index.php">ホーム</a>
    <a href="pet_list.php">ペット一覧</a>
    <a href="pet_register.php">ペット登録</a>
</div>';

echo '<div class="pet-list">';
while ($row = $result->fetch_assoc()) {
    $image = $row['image_path'];
    $category = $row['category'];

    // カテゴリ別のデフォルト画像設定
    if (!$image) {
        switch ($category) {
            case '犬':
                $image = 'images/dog.jpg';
                break;
            case '猫':
                $image = 'images/cat.jpg';
                break;
            case '鳥':
                $image = 'images/bird.jpg';
                break;
            case 'その他':
                $image = 'images/other.jpg';
                break;
            case '迷子':
                $image = 'images/lost_pet.jpg';
                break;
        }
    }

    echo "<div class='pet-item'>
        <img src='$image' alt='{$row['name']}' />
        <h3>{$row['name']} ({$row['category']})</h3>
        <p>{$row['breed']}</p>
        <p>{$row['description']}</p>
    </div>";
}
echo '</div>';
?>
