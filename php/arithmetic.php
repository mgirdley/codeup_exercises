<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
            echo $a + $b . PHP_EOL;
    } else {
        showError($a, $b);
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
            echo $a - $b . PHP_EOL;
    } else {
        showError($a, $b);
    }
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
            echo $a * $b . PHP_EOL;
    } else {
	    showError($a, $b);
    }
}

function divide($a, $b) {
	if ($b==0) {
		divideByZeroError($a, $b);
	}	elseif (is_numeric($a) && is_numeric($b)) {
            echo $a / $b . PHP_EOL;
    	} else {
        showError($a, $b);
    }
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
            echo $a % $b . PHP_EOL;
    } else {
        showError($a, $b);
    }
}

function showError($a, $b) {
	echo "ERROR: Both arguments {$a} and {$b} must be numbers\n";
}

function divideByZeroError($a, $b) {
	echo "ERROR: Cannot divide by zero.\n";
}



divide(5,2);
divide(5,0);
multiply(3,12039123);
subtract(123,"foo");
add(12,12);
modulus(5,2);

?>