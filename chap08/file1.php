<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>アップロード処理</title>
</head>

<body>
    <form action="file2.php" method="post" enctype="multipart/form-data">
        <label for="upfile">ファイルのパス：</label>
        <input type="hidden" name="max_file_size" value="1000000" />
        <input type="file" name="upfile" id="upfile" size="40" />
        <button type="submit" value="アップロード">アップロード</button>
    </form>
</body>

</html>