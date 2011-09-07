<?php

function string_to_array1($string)
{
	$string2array = str_split($string);

	foreach ($string2array as $char)
	{
		$array[] = $char;
	}

	return $array;
}

function transform_string1($array, $array2)
{
	$temp = decrypt_string1($array);
	$array3 = str_split($temp, 3);
	$str = decrypt1($array3, $array2);

	return $str;
}

function key_calculation1($key)
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

function decrypt1($array, $array2)
{
	$temp = array();

	for ($i = 0; $i < count($array); $i++)
	{
		$a = octdec($array[$i]);
		$b = octdec($array2[$i]);
		$c = decoct($a - $b);
		$str = $str.chr(octdec($c));
	}

	return $str;
}

function decrypt_string1($array)
{
	for ($i = 0; $i < count($array); $i++)
	{
		if ($i % 2) {
			$arr1[] = $array[$i];
		} else {
			$arr2[] = ord($array[$i]);
		}
	}

	for ($j = 0; $j < count($arr2); $j++)
	{
		if ($j % 2) {
			$sub = 48;
		} else {
			$sub = 97;
		}

		$r = $arr2[$j] - $sub;
		$arr3[$j] = (string)($r * 10 + $arr1[$j]);

		if ($j < count($arr2) - 1) {
			if ($arr3[$j] < 10) $arr3[$j] = '0'.$arr3[$j];
		}
	}

	if ((count($arr3) % 3 == 0) && intval($arr3[count($arr3)-1]) < 10) {
		$arr3[count($arr3)-1] = '0'.strval($arr3[count($arr3)-1]);
	}

	return implode($arr3);
}

?>
