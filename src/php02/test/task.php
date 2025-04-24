<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["reset"])) {
        $_SESSION["tasks"] = [];
    } else {
        $task = trim(($_POST["task"]));
        if (!empty($task)) {
            $_SESSION["tasks"][] = $task;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="task.css">
    <title>Task List</title>
</head>

<body>
    <h1>やることリスト</h1>
    <form action="" method="POST">
        <input type="text" name="task" placeholder="新しいタスクを入力" class="new-task" required>
        <button type="submit">追加</button>
    </form>

    <form action="" method="POST">
        <button type="submit" name="reset">リセット</button>
    </form>

    <div class="task-list">
        <h2>タスク一覧</h2>
        <?php if (empty($_SESSION["tasks"])): ?>
            <p>タスクはありません</p>

        <?php else: ?>
            <?php foreach ($_SESSION["tasks"] as $task): ?>
                <div class="task">
                    <?php echo htmlspecialchars($task); ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>


</body>

</html>