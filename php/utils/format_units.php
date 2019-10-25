<?php

/**
 * Convert huge number to given units format
 * 
 * @param $value - Number to format
 * @param $base - A base value to divide with
 * @param $units - List of units by it's weight, starting from 0, 1000, 10 000 ... 
 * @param $precision
 * @return string
 * 
 */
function format_unit(
    $value,
    $base = 1024,
    $units = ['', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
    $precision = 2
) {
    if ($value < 0) {
        return '-' . format_unit(abs($value), $units, $precision);
    }

    if ($value < 1) {
        return $value . ' ' . $units[0];
    }

    $power = min(
        floor(log($value, $base)),
        count($units) - 1
    );

    return round($value / pow($base, $power), $precision) . ' ' . $units[$power];
}
