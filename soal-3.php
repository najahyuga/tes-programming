<?php
    $count9 = 0;
    for ($i = 0; $i <= 100; $i++) { 
        echo $i . "\n";

        if (strpos((string)$i, '9') !== false) {
            $count9++;
        }
    }
    echo "Angka 9 muncul sebanyak " . $count9 . " kali.";
?>