<?php

/**
 * Convert an CamelCase strint to Title Case
 */
function camelToTitle($camelStr)
{
    $intermediate = preg_replace('/(?!^)([[:upper:]][[:lower:]]+)/', ' $0', $camelStr);
    $titleStr     = preg_replace('/(?!^)([[:lower:]])([[:upper:]])/', '$1 $2', $intermediate);

    return $titleStr;
}
