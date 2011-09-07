<?php

function string_to_array($string)
{
	$string2array = str_split($string);

	foreach ($string2array as $char)
	{
		$var = decoct(ord($char));

		if ($var < 100) {
			$var = '0'.$var;
		}

		$array[] = $var;
	}

	return $array;
}

function transform_string($array, $array2)
{
	$res = encrypt($array, $array2);
	$res2 = implode($res);
	$array4 = str_split($res2, 2);

	return encrypt_string($array4);
}

function key_calculation($key)
{
	$temp_array = array();
	$temp = str_split(md5($key));
	$total = 0;

	foreach ($temp as $t)
	{
		$total += ord($t);
		$temp_array[] = decoct(ord($t));
	}

	return $temp_array;
}

function encrypt($array, $array2)
{
	$temp = array();

	for ($i = 0; $i < count($array); $i++)
	{
		$a = octdec($array[$i]);
		$b = octdec($array2[$i]);
		$c = decoct($a + $b);

		if ($c < 100) {
			$c = '0'.$c;
		}

		$temp[] = $c;
	}

	return $temp;
}

function encrypt_string($array)
{
	$string = '';

	foreach ($array as $key => $value)
	{
		$a = intval($value / 10);
		$b = intval($value % 10);

		if ($key % 2) {
			$add = 48;
		} else {
			$add = 97;
		}

		$a = $a + $add;
		$string .= chr($a).$b;
	}

	return $string;
}

function encrypt_user_password($key, $password)
{
	$array1 = string_to_array($password);
	$array2 = key_calculation($key);

	return transform_string($array1, $array2);
}

?>
