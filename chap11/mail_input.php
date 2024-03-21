<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>メール送信</title>
</head>

<body>
    <form action="mail_send.php" method="post">
        <div>
            <label for="subject">件名：</label><br />
            <input type="text" name="subject" id="subject" size="20" maxlength="30" />
        </div>
        <div>
            <label for="from">差出人</label><br />
            <textarea name="from" id="from" cols="30" rows="2"></textarea>
        </div>
        <div>
            <label for="body">本文</label><br />
            <textarea name="body" id="body" cols="50" rows="5"></textarea>
        </div>
        <div>
            <button type="submit">送信</button>
        </div>
    </form>
</body>

</html>