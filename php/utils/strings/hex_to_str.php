<?php

function hexToStr($hex)
{
    $string = '';

    for ($i = 0; $i < strlen($hex) - 1; $i += 2) {
        $string .= chr(hexdec($hex[$i] . $hex[$i + 1]));
    }

    return $string;
}