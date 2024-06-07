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
    
?>