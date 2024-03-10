<?php require_once '../Encode.php' ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>クッキー情報</title>
</head>

<body>
    <form action="cookie2.php" method="post">
        <label for="email">メールアドレス：</label>
        <input type="text" name="email" id="email" size="40" value="<?= e($_COOKIE['email'] ?? '') ?>" />
        <button type="submit" value="送信">送信</button>
    </form>
</body>

</html>