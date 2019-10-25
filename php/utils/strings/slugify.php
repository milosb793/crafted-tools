<?php

/**
 * Convert string to kebab case
 * 
 * @param string $text
 * @return string
 * 
 * Example:
 * 'Foo Bar' -> 'foo-bar',
 * 'Foo's Bar' -> 'foo-s-bar',
 * 'Foo++bar' -> 'foo--bar', 
 * 'Foo1 bar1' -> 'foo--bar-',
 * 
 */
function slugify(string $text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}
