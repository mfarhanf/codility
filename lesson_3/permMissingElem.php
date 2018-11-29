<?php

// https://app.codility.com/demo/results/trainingJJM9NP-WW2/

function solution($A) {
    sort($A);
    $missing_val = 1;
    
    if(!empty($A) && $A[0] != 1) {
        return 1;
    }
    
    if(!empty($A) && $A[count($A)-1] != count($A)+1) {
        return count($A)+1;
    }
    
    for($i=0; $i<count($A); $i++) {
        if(!empty($A[$i+1])) {
            if($A[$i]+1 != $A[$i+1]) {
                $missing_val = $A[$i]+1;
                break;
            }
        }
    }
    
    return $missing_val;
}