<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> お気に入り一覧</title>
</head>
<body>

<?php

$book_name=$_POST[''];
$book_URL=$_POST[''];
$book_id=$_POST[''];
$book_indate=$_POST[''];
$book_coment=$_POST[''];

$book_name=htmlspecialchars($book_name,ENT_QUOTES,'UTF-8');
$book_URL=htmlspecialchars($book_URL,ENT_QUOTES,'UTF-8');
$book_id=htmlspecialchars($book_id,ENT_QUOTES,'UTF-8');
$book_indate=htmlspecialchars($book_indate,ENT_QUOTES,'UTF-8');
$book_coment=htmlspecialchars($book_coment,ENT_QUOTES,'UTF-8');
if($book_name=='')
{
	print '書籍名が入力されていません。<br />';
}
else
{
	print '書籍名：';
	print $book_name;
	print '<br />';
}

if($book_URL=='')
{
	print 'URLが入力されていません。<br />';
}

if($book_id=='')
{
	print 'IDが入力されていません。<br />';
}

if($book_indate=='')
{
	print '登録日が入力されていません。<br />';
}

if($book_coment=='')
{
	print 'コメントが入力されていません。<br />';
}


else

?>

</body>
</html>