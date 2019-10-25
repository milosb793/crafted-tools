<?php

/**
 * Get first element of array in format
 *
 * @param array $array
 * @param $only_value - If true, return only first item value, else return @out
 * @return array
 * 
 * @out = [
 *   0 => $first_element
 *   1 => key,
 *   2 => value
 * ]
 * 
 */
function array_first(array $array, $only_value = true): array
{
    if (empty($array)) {
        return $array;
    }

    $keys      = array_keys($array);
    $first_key = $keys[0];
    $value     = $array[$first_key];

    return $only_value 
            ? $value
            : [
                0 => [$first_key => $value],
                1 => $first_key,
                2 => $value,
    ];
}
