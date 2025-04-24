<?php
session_start(); // セッションを開始

// ボタンがクリックされた場合、カウントを増加
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['count']++;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カウンターアプリ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        .counter {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }

        button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <h1>カウンターアプリ</h1>
    <div class="counter">カウント: <?php echo $_SESSION['count']; ?></div>

    <form method="POST" action="">
        <button type="submit">カウントアップ</button>
    </form>

</body>

</html>