<?php
	$arr1= array("Physics","Chemistry","Maths");
	echo "<pre>The count of array is".count($arr1);

	$arr2= array_pop($arr1);
	echo "<br>The array after removing the last value is:";
	print_r($arr1);
	echo "The removed element is:";
	print_r($arr2);

	array_push($arr1,"Biology");
	echo "<br>The array after adding last value is:";
	print_r($arr1);

	array_unshift($arr1,"English");
	print_r($arr1);
?>