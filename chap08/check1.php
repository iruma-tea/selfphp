<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>チェックボックス</title>
</head>

<body>
    <form action="check2.php" method="post">
        あなたがよく使用する言語は？<br />
        <input type="checkbox" name="lang" id="php" value="PHP" />
        <label for="php">PHP</label>
        <input type="checkbox" name="lang" id="java" value="Java" />
        <label for="java">Java</label>
        <input type="checkbox" name="lang" id="csharp" value="C#" />
        <label for="csharp">C#</label>
        <button type="submit" value="送信">送信</button>
    </form>
</body>

</html>