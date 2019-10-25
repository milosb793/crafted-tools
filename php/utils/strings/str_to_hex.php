<?php

function strToHex($string)
{
    $hex = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $ord     = ord($string[$i]);
        $hexCode = dechex($ord);
        $hex     .= substr('0' . $hexCode, -2);
    }

    return strtoupper($hex);
}