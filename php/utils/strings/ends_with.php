<?php

/**
 * Determine whether some string ends with given string
 * 
 * @param $haystack - String to scan to
 * @param $needle - String to check with
 * @return boolean
 */
function endsWith($haystack, $needle)
{
    // search forward starting from end minus needle length characters
    if (!empty($haystack)) {
        return $needle === "" 
               || strpos($haystack, $needle, strlen($haystack) - strlen($needle)) !== false;
    }

    return false;
}
