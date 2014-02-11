<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function isEmpty($variable_name) {
	isset($variable_name) ? $tmp="SET" : $tmp="EMPTY";
	echo '$variable_name is '. $tmp . PHP_EOL;
}


// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results

isEmpty($nothing);

isEmpty($something);

isEmpty($array);

?>