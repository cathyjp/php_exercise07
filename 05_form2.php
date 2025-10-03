<?php

$name = '';
$tel = '';
$email = '';
$purchase_item = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $purchase_item = $_POST['purchase_item'];

    // バリデーション
    if (empty($name)) $err_msgs[] = '名前を入力して下さい';
    if (empty($tel)) $err_msgs[] = '電話番号を入力して下さい';
    if (empty($email)) $err_msgs[] = 'メールアドレスを入力して下さい';

    if (count($err_msgs) == 0) {
        header('Location: 05_confirm.php?purchase_item=' . $purchase_item);
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>

    <?php if ($err_msgs): ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $msg): ?>
                <li><?= $msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">
        <label for="">氏名</label>
        <br>
        <input type="text" name="name" id="" value="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>">
        <br>
        <label for="">電話番号</label>
        <br>
        <input type="tel" name="tel" id="" value="<?= htmlspecialchars($tel, ENT_QUOTES, 'UTF-8') ?>">
        <br>
        <label for="">メールアドレス</label>
        <br>
        <input type="email" name="email" id="" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>">
        <br>
        <h3>購入するものを選択してください</h3>
        <select name="purchase_item">
            <?php foreach ($items as $item) : ?>
                <option value="<?= $item ?>"><?= $item ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
    </form>
</body>

</html>
