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

$book_name=$_POST['name'];
$book_pass=$_POST['pass'];

$book_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
$book_URL=htmlspecialchars($book_URL,ENT_QUOTES,'UTF-8');

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO mst_staff (name,password) VALUES (?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$book_name;
$data[]=$book_URL;
$data[]=$book_id;
$data[]=$book_indate;
$data[]=$book_coment;
$stmt->execute($data);

$dbh=null;

print $book_name;
print 'を追加しました。<br />';

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<a href="book_list.php"> 戻る</a>

</body>
</html>