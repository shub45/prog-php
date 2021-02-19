<?php
	echo"<pre>";
	$colors= array("Red","Green","Blue");
	print_r($colors);
	$name= array("Bob","Victor","Marci");
	print_r($name);
	foreach ($name as $values){
		$colors[]=$values;

	}	
	$colors= array("Red","Green","Blue");
	$colors[]="yellow";
	print_r($colors);
	$name= array("Bob","Victor","Marci");
	$counter=0;
	foreach ($name as $values)
	{
		$counter++;
	}
	for($j=0;$j<$counter;$j++)
	{
		$name_new[$j+1]=$name[$j];

	}

	print_r($name_new);
	$name_new[0]="Max";
	print_r($name_new);

	$i=3;
	for ($j=$i-1;$j>=0;$j--){
		$color_new[]=$colors[$j];
	}
	print_r($color_new);

	$colors= array("Red","Green","Blue");
	foreach ($colors as $key => value){

	}
	if($value="Green"){
		echo "The the key of green is"$key;
	}

	print_r($colors);


?>