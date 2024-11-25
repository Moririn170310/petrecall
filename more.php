<?php
require_once "../models/Animal.php";

// データベース接続
require '../db.php';

if (isset($_GET['animal_id'])) {
  $animal_id = $_GET['animal_id'];
  // TODO: SQL injection
  $sql = "SELECT * FROM pets WHERE animal_id = {$animal_id};";

  $animal = new Animal();
  $animal_data = $animal->fetch($animal_id);
} else {
  // ペット情報の取得
  $sql = "SELECT * FROM pets";
}
$stmt = $pdo->query($sql);
$pets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>



