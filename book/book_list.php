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

$dsn='mysql:dbname=book;host=localhost;charset=utf8';
$bookname='root';
$URL='';
$coment='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM book_name WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print 'お気に入り一覧<br/><br/>';

while(true)
{
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	print $rec['name'];
	print '<br />';
}

}
catch (Exception $e)
{
	 print 'ただいま障害により大変ご迷惑をお掛けしております。';
	 exit();
}

?>

</body>
</html>