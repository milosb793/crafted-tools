<?php

function isJsonFileEmpty($path)
{
    $empty_json_signs = ["[]", "null", ""];
    $size             = filesize($path);
    $empty            = false;

    foreach ($empty_json_signs as $sign) {
        if (strlen($sign) == $size) {
            $empty = true;
        }
    }

    return $empty;
}