<?php

// https://app.codility.com/demo/results/trainingYD6N4A-BVQ/
// https://app.codility.com/demo/results/trainingFUY63E-56S/

function solution($A) {
    $count = count($A);
    $unpaired = 0;
    sort($A);

    if($count > 0 && $count <= 1000000) {
        for($i=0; $i<$count; $i++) {
            if(!isset($A[$i])) {
                continue;
            }

            for($j=$i+1; $j<$count; $j++) {
                if(isset($A[$i]) && isset($A[$j]) && $A[$i] == $A[$j]) {
                    unset($A[$i], $A[$j]);
                    break;
                }
            }
        }
        
        $unpaired = array_values($A)[0];
    }

    return $unpaired;
}