<?php
require_once 'config.php';

// защита на случай неправильного языка
if (!isset($texts[$lang])) {
    $lang = 'ru';
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $texts[$lang]['title'] ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: #e5e7eb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .box {
            max-width: 500px;
            padding: 30px;
            background: #020617;
            border-radius: 12px;
            text-align: center;
        }
        h1 {
            color: #38bdf8;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1><?= $texts[$lang]['title'] ?></h1>
        <p><?= $texts[$lang]['text'] ?></p>
    </div>
</body>
</html>
