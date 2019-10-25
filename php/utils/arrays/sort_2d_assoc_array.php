<?php 

/**
 * Sort 2d (array of arrays) array by given param, acceding or descending
 *
 * @param     $array
 * @param     $param - key to sort by
 * @param int $sort  - PHP constant SORT_DESC by default
 * @return mixed
 */
function sort_2d_assoc_array($array, $param, $sort = SORT_DESC)
{
    if (is_array($array)) {

        // all values with the given key
        $values = [];

        foreach ($array as $key => $row) {
            $values[$key] = $row[$param];
        }

        // sorting
        array_multisort($values, $sort, $array);
    }

    return $array;
}