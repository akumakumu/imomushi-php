<?php
    // There is a big difference between double quotes and single quotes in PHP.
    // Double quotes process special characters, single quotes does not.

    $x = "Mom";
    echo "Hello $x";
    echo 'Hello $x';

    echo strlen($x)
?>