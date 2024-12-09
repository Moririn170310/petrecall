<?php
session_start();
session_regenerate_id(true);

// ユーザーセッションが存在する場合、ログアウト
if (isset($_SESSION['user'])) {
  unset($_SESSION['user']);
}

// index.php にリダイレクト
header('Location: ../index.php');
exit; // 終了を明示的に記述
