<?php

// Read the diceware dictionary file.  Default to the filename.
function read_file($filename) {

    // var_dump($filename);
    
    if ($filename=="") { $filename = './diceware.wordlist.txt'; }
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    $contents_array = explode("\n", $contents);
    fclose($handle);
    
    return $contents_array;
}


// Get the dictionary file into a temporary array.
$temp_wordlist_array = read_file("");

//var_dump($temp_wordlist_array);

// iterate over the array and break up each string into a final array with keys.
foreach ($temp_wordlist_array as $value) {
	# code...
	$new_key=substr($value, 0, strpos($value, "	"));
	$new_value=substr($value, strpos($value, "	")+1, strlen($value));

	// echo "key: " . $new_key . " value: " . $new_value . "\n";

	$wordlist_array[$new_key]=$new_value;

}

// var_dump($wordlist_array);

// Make certain the command line arg for number of words was supplied.
if (sizeof($argv) < 2) {
	echo "Usage: php diceware.php *number of words* \n.  Exiting.";
	exit(0);
} else {
	$words = $argv[1];
}

echo "Generating password using {$words} dice rolls...\n";

$password="";

// Iterate through the number of words supplied at argv
for ($i=0; $i<$words; $i++) {
	$roll="";

	// make 5 dice rolls.
	for ($j=0; $j<5; $j++) {
		$roll .= rand(1,6);
	}
	// echo "Roll: {$roll}\n";
	$password .= $wordlist_array[$roll] . " ";
}

echo "Your password is: " . $password . "\n";


?>
