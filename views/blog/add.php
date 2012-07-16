<html>
<body>
<?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 echo '<h1>Привет, <b>' . $_POST['name'] . '</b></h1>!';
}
?>
<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
Введите Ваше имя: <input type="text" name="name">
<br>
<input type="submit" name="okbutton" value="OK">
</form>
</body>
</html>