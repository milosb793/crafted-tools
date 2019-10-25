<?php

/**
 * Compare two strings and return true if similarity percent is
 * greater than or equal to $wanted_percentage or false if not
 *
 * @param $term1
 * @param $term2
 * @param int $wanted_percentage
 * @return bool
 */
function similar($term1, $term2, $wanted_percentage = 60)
{
    $percent = 0;
    similar_text($term1, $term2, $percent);

    return $percent >= $wanted_percentage;
}
