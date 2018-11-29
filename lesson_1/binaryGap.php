<?php

// https://app.codility.com/demo/results/trainingZGSZVU-YDH/

function solution($N) {
    $arr_bin = str_split(decbin($N));
    $max_gap = $count = 0;

    foreach($arr_bin as $arr) {
        if($arr == 1) {
            if($count > $max_gap) {
                $max_gap = $count;
            }
            $count = 0;
        } else {
            $count++;
        }
    }

    return $max_gap;
}
