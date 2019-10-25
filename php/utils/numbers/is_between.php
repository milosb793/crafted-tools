<?php

/**
 * Example: is_between(5, 0, 10) -> true
 */
function is_between($needle, $min, $max)
{
    return $needle > $min && $needle <= $max;
}
