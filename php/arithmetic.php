<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
            echo $a + $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
            echo $a - $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
            echo $a * $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b) {
	if ($b==0) {
		echo "ERROR: Cannot divide by zero.\n";
	}	elseif (is_numeric($a) && is_numeric($b)) {
            echo $a / $b . PHP_EOL;
    	} else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
            echo $a % $b . PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}


divide(5,2);
divide(5,0);
multiply(3,12039123);
subtract(123,"foo");
add(12,12);
modulus(5,2);

?>