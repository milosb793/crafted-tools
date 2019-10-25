<?php

/**
 * Push an element with a given index to the end of array
 * 
 * @param $array - Array to take element and  push to
 * @param $key - An index or key of element to push to the end
 * @return $array 
 */
function array_push_to_end(array $array, $key)
{
    if (!array_key_exists($key, $array)) {
        return;
    }

    $item = $array[$key];
    unset($array[$key]);
    $array[$key] = $item;

    return $array;
}
