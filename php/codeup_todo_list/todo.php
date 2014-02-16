<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($list)
{
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN
    $tempString="";
    foreach($list as $key => $item) {
        $tempString .= '[' . $key . ']' . ' ' . $item . PHP_EOL;
    }

    return $tempString;

}

 // Ask for a sort type and return the TODO list sorted accordingly.
function sort_menu($toSort) {

    echo "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered : ";

    $input = get_input(TRUE);

    switch ($input) {
        case 'A':
            asort($toSort);
            return $toSort;
            break;
        case 'Z':
            arsort($toSort);
            return $toSort;
            break;
        case 'O':
            ksort($toSort);
            return $toSort;
            break;
        case 'R':
            krsort($toSort);
            return $toSort;
            break;
        
    }

}


// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) 
{
    // Return filtered STDIN input
    // $upper=fgets($upper);
    return strtoupper(trim(fgets(STDIN)));
}


function new_item($items) {
    
    echo 'Enter item: ';
    
    $newitem = get_input(TRUE);        

    echo 'Add to the (B)eginning or the (E)nd of the list: ';

    $input = get_input(TRUE);

    if ($input=='B') {
        array_unshift($items, $newitem);
    } else array_push($items, $newitem);

    return $items;

}


function read_file($filename) {

    var_dump($filename);
    
    if ($filename=="") { $filename = '../data/todo_list.txt'; }
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    $contents_array = explode("\n", $contents);
    fclose($handle);
    
    return $contents_array;
}


// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (O)pen file, (R)emove item, (S)ort, or (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        $items = new_item($items);
    } elseif ($input == 'O') {
        // Read which file?
        echo 'Enter the filename (or just press enter for file to be ../data/todo_list.txt): ';
        // Get filename
        $filename = get_input();
        // Populatre the array
        $items = read_file($filename);
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key]);
    } elseif ($input == 'S') {
        $items=sort_menu($items);
    } elseif ($input == 'F') {
        $temp = array_shift($items);
        echo "First item removed! \n";
    } elseif ($input == 'L') {
        $temp = array_pop($items);
        echo "Last item removed! \n";
    }


// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
