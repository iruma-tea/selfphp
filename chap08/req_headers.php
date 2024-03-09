<?php require '../Encode.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ヘッダー情報</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>

<body>
    <table class="table">
        <?php
        foreach ($_SERVER as $key => $value) {
            if (str_starts_with($key, 'HTTP_')) {
        ?>
                <tr valign="top">
                    <th><?= e($key) ?></th>
                    <td><?= e($value) ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>