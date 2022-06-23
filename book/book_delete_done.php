<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> お気に入り一覧</title>
</head>
<body>

<?php

try
{

$book_code=$_POST['code'];

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$book_URl);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='DELETE FROM book WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$book_id=;
$stmt->execute($data);

$dbh=null;

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

削除しました。<br />
<br />
<a href="book_list.php"> 戻る</a>

</body>
</html>