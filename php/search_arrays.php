<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search_array($array, $value) {
	
	$index = array_search($value, $array);

	// var_dump($index);

	if ($index===FALSE) {
		return FALSE;
	} else return TRUE;
}

$result=search_array($names,'Tina');
if ($result) {
	echo "Found Tina!\n";
} else { echo "Didn't find Tina!\n";}

$result=search_array($names,'Bob');
if ($result) {
	echo "Found Bob!\n";
} else { echo "Didn't find Bob!\n";}



?>
