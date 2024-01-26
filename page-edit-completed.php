<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>欲しいもの更新完了</title>
</head>

<body>
    <?php
    $pdo = new PDO($connect, USER, PASS);

    $sql = $pdo->prepare('update wishList set product_name=?, price=? where product_id=?');

    if (empty($_POST['name'])) {
        echo '商品名を入力してください。';
    } elseif (!preg_match('/[0-9]+/', $_POST['price'])) {
        echo '商品価格を整数で入力してください。';
    } else {
        // 必要なバリデーションが通った場合
        $id = $_SESSION['id']['id']; // セッションから商品IDを取得
        $name = htmlspecialchars($_POST['name']);
        $price = $_POST['price'];

        if ($sql->execute([$name, $price, $id])) {
            echo '更新に成功しました。';
        } else {
            echo '更新に失敗しました。';
        }
    }

    ?>
    <br>
    <button onclick="location.href='page3.php'">更新削除画面へ戻る</button>
</body>

</html>
