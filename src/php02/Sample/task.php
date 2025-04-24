<?php
session_start(); // セッションを開始

// フォームが送信された場合
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['reset'])) {
        // タスクをリセット
        $_SESSION['tasks'] = [];
    } else {
        $task = trim($_POST['task']);
        if (!empty($task)) {
            $_SESSION['tasks'][] = $task; // タスクを追加
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
</head>

<body>

    <h1>やることリスト</h1>
    <form method="POST" action="">
        <input class="new-task" type="text" name="task" placeholder="新しいタスクを入力" required>
        <button type="submit">追加</button>
    </form>

    <form method="POST" action="">
        <button type="submit" name="reset">リセット</button>
    </form>

    <div class="task-list">
        <h2>タスク一覧：</h2>
        <?php if (empty($_SESSION['tasks'])): ?>
            <p>タスクはありません。</p>
        <?php else: ?>
            <?php foreach ($_SESSION['tasks'] as $task): ?>
                <div class="task"><?php echo htmlspecialchars($task); ?></div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</body>

</html>