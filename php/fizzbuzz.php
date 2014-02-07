<?php

for ($a=1; $a<=100; $a++) {

    $multipleThree=(($a % 3) == 0);
    $multipleFive=(($a % 5) == 0);
    
    if ($multipleThree && $multipleFive) {
       echo "FizzBuzz\n";
    } elseif ($multipleThree) {
        echo "Fizz\n";
    } elseif ($multipleFive) {
        echo "Buzz\n";
    } else {
        echo $a . "\n";
    }

} 

?>