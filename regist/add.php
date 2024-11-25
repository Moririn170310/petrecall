<?php
require_once('../db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $posts = $_POST;

    // データベースに保存
    $sql = "INSERT INTO pets (name, animal_id, image_name, description) 
                     VALUES (:name, :animal_id, :image_name, :description);";

    $stmt = $pdo->prepare($sql);
    $stmt->execute($posts);
    header('Location: complete.php');
}
