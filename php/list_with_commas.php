
<?php


$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famous_fake_physicists = explode(',',$physicists_string);

$hold=array_pop($famous_fake_physicists);

$famous_fake_physicists[]=(" and" . $hold);

$new_physicists_string = implode(',', $famous_fake_physicists);

echo "Some of the most famous fictional theoretical physicists are {$new_physicists_string}.\n";