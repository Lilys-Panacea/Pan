<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: auth.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Страница админа</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<form action="newproduct.php" method="post">
<p>Название товара:</p>
<input name="nameproduct">
<p>Изображение:</p>
<textarea name="image"></textarea>
<p>Количество:</p>
<input name="number">
<p>Стоимость</p>
<input name="cost">
<input type="submit" value="Добавить статью">
</form>
</body>
</html>