<?php

// https://app.codility.com/demo/results/trainingSVKB6G-QXV/
// https://app.codility.com/demo/results/training9T5PAM-WRH/

function solution($A, $K) {
    $arr_count = count($A);

    if($K > 0 && $K <= 100 && $arr_count > 0 && $arr_count <= 100) {
        $mod = $K % $arr_count;

        for($i=0; $i<$mod; $i++) {
            $last = array_pop($A);
            $A = array_merge([$last], $A);

            if($last < -1000 || $last > 1000) {
                return $ori_a;
            }
        }
    }

    return $A;
}