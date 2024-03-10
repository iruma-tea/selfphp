<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>画像のアップロード</title>
</head>

<body>
    <form action="bindValue_process.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="photo" size="50" />
        <button type="submit" value="アップロード">アップロード</button>
    </form>
</body>

</html>