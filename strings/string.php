<?php
    // There is a big difference between double quotes and single quotes in PHP.
    // Double quotes process special characters, single quotes does not.

    $x = "Hello Mom";
    echo "Hello $x";
    echo 'Hello $x';

    // String Length
    echo strlen($x);

    // Word Count
    echo str_word_count($x);

    // Search for Text
    echo strpos($x, "Mom");

    // Upper Case
    echo strtoupper($x);

    // Lower Case
    echo strtolower($x);
    
    // Replace
    echo str_replace("Mom", "Ame", $x);

    // Concat
    $a = "Hello";
    $b = "Mom";

    $c = $a . $b;
    $d = $a . " " . $b;
    $e = "$a $b";

    echo $e;

    // Slicing
    // Slice at index 6 and end 5 positions later
    echo substr($x, 6, 5);

    // Slice to the end from index 6
    echo substr($x, 6);

    // Slice From the End
    // The last character has index -1
    echo substr($x, -3, 3);

    echo substr($x, 3, -2);

    // Escape Character
    // An escape character is a backslash \ followed by the character you want to insert.

    $y = "Hello \"Mom\" ";

    // Other Escape Characters
    // Code     Res
    // \'       Single Quote
    // \$       PHP Variables
    // \n       New Line
    // \r       Carriage Return
    // \t       Tab
    // \f       Form Feed
    // \ooo     Octal Value
    // \xhh     Hex Value
?>