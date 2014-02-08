<?php

for ($i=1; $i<=100; $i++) {
    if (($i % 10 == 1) && ($i > 1)) { break; } 
    else { echo $i . "\n"; }
}

?>