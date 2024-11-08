<?php
// register_pet.php

// データベース接続
require 'db.php';

// フォームからのデータ
$dog_name = $_POST['dog_name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // パスワードのハッシュ化
$address = $_POST['address'];
$phone = $_POST['phone'];
$dog_image = base64_decode($_POST['dog_image']);  // Base64エンコードされた画像をデコード

// SQLにデータを挿入
$sql = "INSERT INTO pets (dog_name, user_name, email, password, address, phone, image) 
        VALUES (:dog_name, :user_name, :email, :password, :address, :phone, :image)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':dog_name', $dog_name);
$stmt->bindParam(':user_name', $user_name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':image', $dog_image, PDO::PARAM_LOB);
$stmt->execute();

// 登録後に一覧画面にリダイレクト
header('Location: list.php');
exit;
?>
