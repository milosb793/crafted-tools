<?php

/**
 * Sort an array of IP addresses
 * 
 * @param $ip_array - Array of IPs to sort
 * @param $ip_field - Accessor for IP field. Default null for element itself
 * @return @ip_array
 */
function sortIpList($ip_array, $ip_field = null)
{
    uasort($ip_array, function ($a, $b) use ($ip_field) {

        return ip2long($a[$ip_field] ?? $a) - ip2long($b[$ip_field] ?? $b);
    });

    return $ip_array;
}
