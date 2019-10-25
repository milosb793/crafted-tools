<?php

/**
 * Remove empty elements from an array
 * 
 * @param $arr - Array to remove empty values from
 * @param boolean $keep_indexes - If true, indexes of input array won't be changed. If false, return only array values
 * @return array
 */
function arrayPopEmpty($arr, $keep_indexes = false, $is_empty_callback = null)
{
    if (!is_callable($is_empty_callback)) {
        $is_empty_callback = function ($e) { return empty($e); };
    }

    $data = array_filter($arr, function ($e) use ($is_empty_callback) {
        return !$is_empty_callback($e);
    });

    return $keep_indexes
        ? $data
        : array_values($data);
}
