<?php
error_reporting(E_ALL);
ini_set("display_errors", 0); 
include_once('genpass.php');

$min = '10';
$max = '15';
$number = '4';
$special = '2';
$capital = '5';
$number_check = 'checked="checked"';
$special_check = 'checked="checked"';
$capital_check = 'checked="checked"';

if (isset($_POST['minlength'])) $min = $_POST['minlength'];
if (isset($_POST['maxlength'])) $max = $_POST['maxlength'];
if (isset($_POST['num_numbers'])) $number = $_POST['num_numbers'];
if (isset($_POST['num_special'])) $special = $_POST['num_special'];
if (isset($_POST['num_capital'])) $capital = $_POST['num_capital'];
if (!isset($_POST['number'])) $number_check = '';
if (!isset($_POST['special'])) $special_check = '';
if (!isset($_POST['capital'])) $capital_check = '';

?>



<html>
<head></head>
<body>
<form method="post" action="">
<p> Create a random password : <br><br/ >
Minimum Password Length <input name="minlength" value="<?=$min?>" size="3" maxlength="2" type="text"> characters<br/ >
Maximum Password Length <input name="maxlength" value="<?=$max?>" size="3" maxlength="2" type="text"> characters<br/ ><br/ >
<input name="number" value="1" <?=$number_check?> type="checkbox"> Include numbers<br>
<input name="num_numbers" value="<?=$number?>" type="text" size="3" maxlength="3"> Maximum numbers<br/ ><br/ >
<input name="special" value="1" <?=$special_check?> type="checkbox"> Include special characters<br/ >
<input name="num_special" value="<?=$special?>" type="text" size="3" maxlength="3"> Maximum special characters<br/ ><br/ >
<input name="capital" value="1" <?=$capital_check?> type="checkbox"> Include capitalize letters<br/ >
<input name="num_capital" value="<?=$capital?>" type="text" size="3" maxlength="3"> Maximum capitalize letters<br/ ><br/ >
</p>
<input type="submit" name="generate" value="Generate"> 
</form>
</body>
</html>

<?=$password?>
