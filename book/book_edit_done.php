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

$book_=$_POST['code'];
$book_name=$_POST['name'];
$book_pass=$_POST['pass'];

$book_name=htmlspecialchars($book_name,ENT_QUOTES,'UTF-8');
$book_pass=htmlspecialchars($book_URL,ENT_QUOTES,'UTF-8');

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='UPDATE mst_staff SET name=?,URL=? WHERE id=?';
$stmt=$dbh->prepare($sql);
$data[]=$book_name;
$data[]=$book_URL;
$data[]=$book_id;
$stmt->execute($data);

$dbh=null;

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

修正しました。<br />
<br />
<a href="book_list.php"> 戻る</a>

</body>
</html>