<?php

/**
 * Generates an random array with int elements, 
 * with number of elements in a given range
 * 
 * @param $min - Minimum number of elements
 * @param $max - Maximun number of elements 
 * @return array
 */
function rand_array($min = 0, $max = 10)
{
    $arr = [];
   
    foreach (range($min, $max) as $i) {
        $arr[] = rand(10, 1000);
    }

    return $arr;
}
