<?php

/**
 * Determine whether given value is empty
 * 
 * @param $val - Any type value, can be array with infinity depth, associative array or object
 * @param $empty_values - Array of values to consider as empty value
 * @return boolean
 */
function is_empty($val, $empty_values = [0, [], null, ''])
{
    $is_empty = false;

    if (!is_array($val)) {
        $val = [$val];
    }

    foreach ($val as $i => $v) {
        $is_empty = is_array($v) ? 
            is_empty($v)
            : empty($v) || in_array($v, $empty_values, true);
    }

    return $is_empty;
}
