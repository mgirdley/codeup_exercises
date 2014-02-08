<?php

$thing = TRUE;

switch($thing) {
  case (is_bool($thing)): echo "boolean."; break;

//  case: "integer"
//"double" (for historical reasons "double" is returned in case of a float, and not simply "float")
//"string"
//"array"
//"NULL"

}

?>