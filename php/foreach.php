<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) {

    echo "Value is a";

    if (is_integer($value)) { echo "n integer."; } 
        elseif (is_float($value)) { echo " float."; }
        elseif (is_bool($value)) { echo " boolean."; }
        elseif (is_array($value)) { echo "n array."; }
        elseif (is_null($value)) {echo " null."; }
        elseif (is_string($value)) { echo " string."; }
        else {echo " none of the above!"; }

    echo("\n");   
}

?>