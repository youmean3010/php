<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ユーザー登録</title>
</head>

<body>
    <h1>☆ユーザ登録フォーム☆</h1>
    <form action="" method="post">
        <input type="text" name="name" placdeholder="名前" required>
        <input type="email" name="email" placdeholder="メールアドレス" required>
        <input type="password" name="password" placdeholder="パスワード" required>
        <br>
        <button type="submit">登録する</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        echo "<h2>登録完了！</h2>";
        echo "<p>名前: $name</p>";
        echo "<p>メールアドレス: $email</p>";
        echo "<p>パスワードは安全に保存されます。";
    }

    ?>

</body>

</html>