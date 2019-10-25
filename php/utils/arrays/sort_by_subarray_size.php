<?php

/**
 * Sort an 2D associative array by subarray element size
 * 
 * @Example
 * 
 * Input: $arr = [
 *     ['key1' => [1, 2, 3], 'key2' => 'foo', 'key3' => 2],
 *     ['key1' => [1], 'key2' => 'foo', 'key3' => 2],
 *     ['key1' => [1,2], 'key2' => 'foo', 'key3' => 2], 
 * ]
 * 
 * @Call: sort2dArrayByElemenSize($arr, 'key1', SORT_ASC);
 *
 * @Output: [
 *     ['key1' => [1], 'key2' => 'foo', 'key3' => 2],
 *     ['key1' => [1,2], 'key2' => 'foo', 'key3' => 2], 
 *     ['key1' => [1, 2, 3], 'key2' => 'foo', 'key3' => 2],
 * ]
 * 
 * @param $array - Array to sort
 * @param $param - A key to do sort with
 * @param $sort - SORT_ASC or SORT_DESC constants 
 * @return $array
 * 
 */
function sort2dArrayByElemenSize($array, $param, $sort = SORT_DESC)
{
    $cmp_fn = function ($a, $b) use ($param, $sort) {
        if (count($a[$param]) > count($b[$param])) {
            return $sort == SORT_DESC ? 1 : -1;
        } else {
            if (count($a[$param]) < count($b[$param])) {
                return $sort == SORT_DESC ? -1 : 1;
            }
        }

        return 0;
    };

    usort($array, $cmp_fn);

    return $array;
}
