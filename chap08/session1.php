<?php
require_once '../Encode.php';
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>セッション情報</title>
</head>

<body>
    <form action="session2.php" method="post">
        <label for="email">メールアドレス：</label>
        <input type="text" name="email" id="email" size="40" value="<?= e($_SESSION['email'] ?? '') ?>" />
        <button type="submit" value="送信">送信</button>
    </form>
</body>

</html>