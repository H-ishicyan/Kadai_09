<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>お気に入り一覧</title>
</head>
<body>

<?php

try
{

$book_code=$_GET['id'];

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$book_id='';
$dbh=new PDO($dsn,$user,$book_id);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM book WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$book_id;
$stmt->execute($data);

$rec=$stmt->fetch(PDO::FETCH_ASSOC);
$book_name=$rec['name'];

$dbh=null;

}
catch(Exception $e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

スタッフ削除<br />
<br />
スタッフコード<br />
<?php print $staff_code; ?>
<br />
スタッフ名<br />
<?php print $staff_name; ?>
<br />
このスタッフを削除してよろしいですか？<br />
<br />
<form method="post" action="book_delete_done.php">
<input type="hidden"book_name="code" value="<?php print $book_id; ?>">
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="ＯＫ">
</form>

</body>
</html>