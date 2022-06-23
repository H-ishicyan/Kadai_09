<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> お気に入り一覧</title>
</head>
<body>

<?php

$book_code=$_POST['code'];
$book_name=$_POST['name'];
$book_URL=$_POST['pass'];
$book_coment=$_POST['pass2'];

$book_code=htmlspecialchars($book_code,ENT_QUOTES,'UTF-8');
$book_name=htmlspecialchars($book_name,ENT_QUOTES,'UTF-8');
$book_URL=htmlspecialchars($book_URL,ENT_QUOTES,'UTF-8');

if($book_name=='')
{
	print '本の名称が入力されていません。<br />';
}
else
{
	print '本の名前：';
	print $book_name;
	print '<br />';
}



if($b_name=='' )
{
	print '<form>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '</form>';
}
else
{
	$book_name=md5($book_name);
	print '<form method="post" action="staff_edit_done.php">';
	print '<input type="hidden" name="code" value="'.$book_name.'">';
	print '<input type="hidden" name="name" value="'.$book_URL.'">';
	print '<input type="hidden" name="pass" value="'.$book_id.'">';
	print '<br />';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '<input type="submit" value="ＯＫ">';
	print '</form>';
}

?>

</body>
</html>