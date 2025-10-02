<?php
$judge_ment = filter_input(INPUT_GET, 'judge_ment');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1><?= $judge_ment ?>です</h1>
    <a href="03_form2.php">戻る</a>
</body>

</html>
