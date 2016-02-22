<?php
echo "this is my first time create a git repository";

if($_GET)
{
	$argument1 = $_GET['arg1'];
	$argument2 = $_GET['arg2'];
}else{
	$argument1 = 10;
	$argument2 = 20;
}

$result = $argument1 + $argument2;

echo  "Total of $argument1 and $argument2 is $result";

?>
