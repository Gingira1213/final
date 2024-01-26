<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>page3</title>
</head>

<body>
    <h1>欲しいもの更新削除</h1>
    <button onclick="window.location.href='index.html'">トップへ戻る</button>
    <hr>
    <table>
        <tr>
            <th>　　</th>
            <th>商品名</th>
            <th>価格</th>
            <th>更新</th>
            <th>削除</th>
        </tr>
        <?php
        $pdo = new PDO($connect, USER, PASS);
        foreach ($pdo->query('select * from wishList') as $row) {
            echo '<tr>';
            echo '<td>', $row['product_id'], '</td>';
            echo '<td>', $row['product_name'], '</td>';
            echo '<td>', $row['price'], '</td>';
            echo '<td>';
            echo '<form action="page-edit.php" method="post">';
            echo '<input type="hidden" name="id" value="', $row['product_id'], '">';
            echo '<button type="submit">更新</button>';
            echo '</form>';
            echo '</td>';
            echo '<td>';
            echo '<form action="page-delete.php" method="post">';
            echo '<input type="hidden" name="id" value="', $row['product_id'], '">';
            echo '<button type="submit">削除</button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
            echo "\n";
        }
        ?>
    </table>
</body>

</html>