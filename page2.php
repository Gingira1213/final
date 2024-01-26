<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <!-- cssの読み込み -->
    <link rel="stylesheet" href="./css/page2.css" />
    <title>欲しいもの登録</title>
</head>

<body>
    <div class="contents-container">
        <form action="page2-completed.php" method="post">
            <h1>欲しいもの登録</h1>
            <hr>
            <br>
            商品名<br>
            <input type="text" name="product_name" required /><br><br>
            値段<br>
            <input type="text" name="price" required /><br><br>
            <button type="submit" class="button-input" >登録</button>
        </form>
    </div>
</body>

</html>