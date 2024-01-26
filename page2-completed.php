<?php require 'db-connect.php'; ?>
<?php
$pdo = new PDO($connect, USER, PASS);

// 商品情報をデータベースに挿入
$sql = $pdo->prepare('insert into wishList values(null,?,?)');
$sql->execute([
    $_POST['product_name'], $_POST['price'],
]);
?>

<!DOCTYPE html>
<html>

<head>
    <title>商品登録完了画面</title>
    <link rel="stylesheet" href="../css/page2-completed.css">
</head>

<body>
    <h3>登録が完了しました</h3>
    <form action="index.html" method="POST">
        <button type="submit" class="button-input">ホームへ戻る</button>
    </form>
</body>

</html>