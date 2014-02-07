<?php

$a = 1;

$heads = 0;
$tails = 0;

$flip=null;

do {

    $flip = mt_rand(1,2);

    if ($flip==1) { $heads++; } else { $tails++; }

    $a++;

    if ($a % 100000==0) {
       echo "$a: heads: $heads tails: $tails " . (double)($heads-$tails)/($a)*100 . "%\n";
    }

} while ($a<10000000000);

?>