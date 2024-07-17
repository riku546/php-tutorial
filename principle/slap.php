<?php

//SLAP (Single Level of Abstraction Principle）の悪い例
function processOrder($order)
{
    //なにも注文しなかったら、エラーを出す
    if (empty($order)) {
        throw new Exception('注文はからです');
    }

    //注文の合計金額の計算
    $total = 0;
    foreach ($order["items"] as $item) {
        $total += $item["price"] * $item["quantity"];
    }

    //DBに保存
    $db = new mysqli("localhost", "user", "password", "database");
    $stmt = $db->prepare("INSERT INTO orders (customer_id, total) VALUES (?, ?)");
    $stmt->execute([$order["customer_id"], $total]);

    //確認メールの送信
    mail($order["email"], "注文確認", "注文ありがとうございます。 合計金額:" . $total);

}

//SLAPの良い例
//関数ごとに抽象レベルが統一されている（１つの関数に１つの処理がある）
function checkOrder($order)
{
    //なにも注文しなかったら、エラーを出す
    if (empty($order)) {
        throw new Exception('注文はからです');
    }
}

function calcTotal($order): int
{
    //注文の合計金額の計算
    $total = 0;
    foreach ($order["items"] as $item) {
        $total += $item["price"] * $item["quantity"];
    }

    return $total;
}

function storage($order, $total)
{
    //DBに保存
    $db = new mysqli("localhost", "user", "password", "database");
    $stmt = $db->prepare("INSERT INTO orders (customer_id, total) VALUES (?, ?)");
    $stmt->execute([$order["customer_id"], $total]);

}

function sendMail($order, $total)
{
    //確認メールの送信
    mail($order["email"], "注文確認", "注文ありがとうございます。 合計金額:" . $total);

}
