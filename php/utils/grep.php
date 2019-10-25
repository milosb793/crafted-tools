<?php

/**
 * Grep certain file using regular expression using linux grep command
 * 
 * @param $regex
 * @param $path
 * @param array $opts - (optional) fields :array [merge rows with given fields], (optional) expected_rows :int [to speed up searching]
 * @return array
 */
function grep($regex, $path, $opts = [])
{
    $output      = [];
    $expected_rows = $opts['expected_rows'] ?? 1;

    $cmd         = "grep -m {$expected_rows} -P {$regex} {$path}";
    $grep_output = shell_exec($cmd);
    $grep_output = explode("\n", $grep_output);

    foreach ($grep_output as $line) {
        if (empty($line)) {
            continue;
        }

        $row = array_map(function ($e) {
            return preg_replace('/[\'\"]/', '', trim($e));
        }, explode(',', $line));

        if (!empty($opts['fields'])) {
            $row = array_combine($opts['fields'], $row);
        }

        $output[] = $row;
    }

    return $output;
}
