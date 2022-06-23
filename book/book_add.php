<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> お気に入りの本一覧</title>
</head>
<body>

お気に入りの本<br />
<br />
<form method="post" action="book_add_check.php">

idを入力してください。<br />
<input type="text" name="id" style="width:200px"><br />
本の名前を入力してください。<br />
<input type="text" name="bookname" style="width:200px"><br />
URLを入力してください。<br />
<input type="text" name="URL" style="width:100px"><br />
書籍コメントを入力してください。<br />
<input type="text" name="coment" style="width:100px"><br />
登録日を入力してください。<br />
<input type="text" name="indate" style="width:100px"><br />
<br />
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">
</form>

</body>
</html>