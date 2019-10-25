<?php

/**
 * @param $array
 * @param $keys - Array element accessor key with dot notation: 'foo.bar.0'
 * @param $value - Value to set for element with given $keys 
 * @return mixed
 */
function setArray($array, $keys, $value)
{
    $keys    = explode(".", $keys);
    $current = &$array;

    foreach ($keys as $key) {
        $current = &$current[$key] ?? null;
    }

    $current = $value;

    return $array;
}
