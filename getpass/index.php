<?php
include_once('encr_decr.php');
var_dump($_POST);
$string1 = '';
$string2 = '';
$key = '';
if (isset($_POST['string1'])) $string1 = $_POST['string1'];
if (isset($_POST['string2'])) $string2 = $_POST['string2'];
if (isset($_POST['key'])) $key = $_POST['key'];
?>

<html>
<head></head>
<body>
<form method="post" action="" autocomplete="off">
String 1&nbsp;&nbsp;<input type="text" size="100" maxlength="200" name="string1" value="<?= $string1 ?>"> <br />
Key&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="100" maxlength="200" name="key" value="<?= $key ?>"><br />
String 2&nbsp;&nbsp;<input type="text" size="100" maxlength="200" name="string2" value="<?= $string2 ?>"><br />
<br />
<input type="submit" name="encrypt" value="Encrypt" />
<input type="submit" name="decrypt" value="Decrypt" />
</form>
</body>
</html>
