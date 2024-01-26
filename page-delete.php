<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>page-delete</title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from wishList where product_id=?');
    $sql->execute([$_POST['id']]);
    echo '削除しました';
?>
    <form action="page3.php" method="post">
        <button type="submit">更新削除画面へ戻る</button>
    </form>
    </body>
</html>

