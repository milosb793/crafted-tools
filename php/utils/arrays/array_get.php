<?php

/**
 * @param $array
 * @param $keys - Array element accessor key with dot notation: 'foo.bar.0'
 * @param null $default - Value to return if no element with given $keys
 * @return mixed
 */
function arrayGet(array $array, $keys, $default = null)
{
    $keys    = explode(".", $keys);
    $current = &$array;

    foreach ($keys as $key) {
        $current = &$current[$key] ?? $default;
    }

    return $current;
}