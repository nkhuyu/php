<?php
$arr = array(1,2,3);
foreach ($arr as &$value)
{
	$value = $value * 2.125;
}
unset($value);
var_dump($arr);
?>
