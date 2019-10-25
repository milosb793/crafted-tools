<?php

/**
 * Determine whether some string starts with given string
 * 
 * @param $haystack - String to scan to
 * @param $needle - String to check with
 * @return boolean
 */
function startsWith($haystack, $needle)
{
    // search backwards starting from haystack length characters from the end
    return $needle === "" 
           || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}
