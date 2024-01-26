<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <!-- cssの読み込み -->
    <link rel="stylesheet" href="./css/page1.css" />
    <title>欲しいもの一覧</title>
</head>

<body>
    <div class="contents-container">
        <h1>欲しいもの一覧</h1>
        
        <button onclick="window.location.href='index.html'">トップへ戻る</button>
        <hr>
        <br>
        <table>
            <tr>
                <th>　　</th>
                <th>商品名</th>
                <th>価格</th>
            </tr>
            <?php
            $pdo = new PDO($connect, USER, PASS);
            foreach ($pdo->query('select * from wishList') as $row) {
                echo '<tr>';
                echo '<td>', $row['product_id'], '</td>';
                echo '<td>', $row['product_name'], '</td>';
                echo '<td>', $row['price'], '</td>';
                echo '</tr>';
                echo "\n";
            }
            ?>
        </table>
    </div>
</body>

</html>