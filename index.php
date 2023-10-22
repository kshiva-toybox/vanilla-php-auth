<?php
// セッションを開始する
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Auth Sample</title>
</head>

<body>
    <? if (isset($_SESSION['id'])) : ?>
        <h1>Hello, <?= $_SESSION['id'] ?>!</h1>
    <? else : ?>
        <h1>ログイン</h1>

        <form action="/login.php" method="post">
            <label for="id">
                ID:
                <input type="text" id="id" name="id" required>
            </label>
            <label for="password">
                パスワード:
                <input type="password" id="password" name="password" required>
            </label>
            <button type="submit">送信</button>
        </form>
    <? endif; ?>
</body>

</html>
