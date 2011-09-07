<?php

include_once('encrtest.php');
include_once('decrtest.php');

if (isset($_POST['encrypt']))
{
	$array2 = key_calculation($_POST['key']);
	$array = string_to_array($_POST['string1']);
	$_POST['string2'] = transform_string($array, $array2);
}
else if (isset($_POST['decrypt']))
{
	$array2 = key_calculation1($_POST['key']);
	$array = string_to_array1($_POST['string2']);
	$_POST['string1'] = transform_string1($array, $array2);
}

?>
