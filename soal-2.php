<?php

function testnci(){
    $x = 1;
    $y = 2;

    echo "x awal = ". $x . "\n";
    echo "y awal = " . $y . "\n";

    $x = $x + 1;
    $y = $y - 1;
    // $x = $x - $y;

    echo "x final = ". $x . "\n";
    echo "y final = " . $y . "\n";
}

echo testnci();
?>