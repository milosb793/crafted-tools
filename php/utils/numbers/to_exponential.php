<?php

/**
 * Return exponential form of an huge number
 * 
 * @param $number - Number to convert
 * @param $decimal_point_string 
 * @param $thousands_sep - Character to separate thousands 
 * @return array
 * 
 * Example:
 * toExponential(100000) -> ['1,00', 5.0]
 */
function toExponential($number, $decimal_point_string = ',', $thousands_sep = '.')
{
    if (!is_numeric($number)) {
        return $number;
    }

    $zeros = floor(log($number, 10));
    $base  = number_format(
        ($number / (pow(10, $zeros))),
        2,
        $decimal_point_string,
        $thousands_sep
    );

    return [$base, $zeros];
}
