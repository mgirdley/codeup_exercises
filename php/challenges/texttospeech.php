<?php

//    $text = "What up bitch this is pig latin friends";

    echo "Enter the text to do as pig-latin:";

    $text = fgets(STDIN);
    
    $lang = "en";


    $arr = str_split($text);

    $newText='';

    $i=0;
    $j=1;

//    var_dump($arr);

    $trash = array_pop($arr);

    while ($i<sizeof($arr)) {
        while (($arr[$j]!=' ') && ($j<sizeof($arr))) {
            if ($i == ($j-1)) {
                $newText .= strtoupper($arr[$j]);
            } else $newText .= strtolower($arr[$j]);
            $j++;
        }
        $newText .= strtolower($arr[$i]) . "ay ";
        $j=$j+2;
        $i=$j-1;

//        echo $newText . "\n";
    }

    echo $newText . "\n";

    // Name of the MP3 file generated using the MD5 hash
    // Added things to prevent bug if you want the same sentence in two different languages
    $file  = md5($lang."?".urlencode($newText));

    // Save the MP3 file in this folder with the .mp3 extension 
    $file = "audio/" . $file .".mp3";


    // Verify if folder exists, if it doesn't, create it, if exists, verify CHMOD
    if(!is_dir("audio/"))
        mkdir("audio/");
    else
        if(substr(sprintf('%o', fileperms('audio/')), -4)!="0777")
            chmod("audio/", 0777);


    // If the MP3 file exists, do not create a new request
    if (!file_exists($file))
    {
        // Download the content
        $mp3 = file_get_contents(
        'http://translate.google.com/translate_tts?ie=UTF-8&q='. urlencode($newText) .'&tl='. $lang .'&total=1&idx=0&textlen=5&prev=input');
        file_put_contents($file, $mp3);
    }

?>