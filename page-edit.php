<?php require 'db-connect.php'; ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>page-edit</title>
	</head>
	<body>
    <table>
    <tr><th>商品名</th><th>価格</th></tr>
<?php
	unset($_SESSION['id']);
    $pdo=new PDO($connect, USER, PASS);
	$sql=$pdo->prepare('select * from wishList where product_id =?');
	$sql->execute([$_POST['id']]);
	foreach ($sql as $row) {
        echo '<tr>';
		echo '<form action="page-edit-completed.php" method="post">';
		echo '<td>';
		echo '<input type="text" name="name" value="', $row['product_name'], '">';
		echo '</td> ';
		echo '<td>';
		echo ' <input type="text" name="price" value="', $row['price'], '">';
		echo '</td> ';
		echo '<td><input type="submit" value="更新"></td>';
		echo '</form>';
        echo '</tr>';
		echo "\n";
	}

    $_SESSION['id'] = [
        'id' => $row['product_id'],
    ];
?>
</table>
<button onclick="location.href='page3.php'">戻る</button>
    </body>
</html>