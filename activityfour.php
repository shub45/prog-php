<?php
echo "<pre>";
$temp=["20","30","39","40","47","45","50","55","60","67","70","75","80","63","78","80","89","64","70","50","41","34"];
//print_r($temp);
$counter=0;
$sum=0;
foreach ($temp as  $value) {
	$counter++;
	$sum=$sum+$value;
}
echo "The average of the array is ";
echo $sum/$counter;
?>