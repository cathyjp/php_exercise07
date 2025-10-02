<?php

$prices = [
    'バッグ' => 1500,
    '靴' => 3000,
    '時計' => 6000,
    'ネックレス' => 9000,
    'ピアス' => 10000
];

$purchase_item = filter_input(INPUT_GET, 'purchase_item');
$purchase_price = '';

foreach ($prices as $key => $value) {
    if ($purchase_item == $key) $purchase_price = $value;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>ご注文ありがとうございます</h2>
    <?php if ($purchase_price): ?>
        <h2>お支払い金額は、<?= $purchase_price ?>円です</h2>
    <?php endif; ?>
    <a href="05_form2.php">戻る</a>
</body>

</html>
