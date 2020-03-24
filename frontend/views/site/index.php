<?php
    $firstArr = [];
    $secondArr = [];
    for ($i = 1; $i<1728; $i++) {
        if (1728%$i == 0 ) {
            $firstArr[] = $i;
        }
    }
    print_r($firstArr);

?>