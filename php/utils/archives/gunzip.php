<?php

/**
 * Unzip gzip archive
 * 
 * @param $file_path - Archive to unzip 
 * @param $read_bytes - Bytes to read in each iteration
 * @param $path_or_callback - A destination path or callback to process each chunk of gzip file
 * @return void
 */
function gunzip($file_path, $read_bytes = 4096, $path_or_callback = null)
{
    $dest_fp   = null;
    $source_fp = gzopen($file_path, "rb");

    // if second arg is string, not callback, write to output file
    $is_path = is_string($path_or_callback) && !is_callable($path_or_callback);

    if ($is_path) {
        $dest_fp = fopen($path_or_callback, "w");
    }

    // read line by line from gz file
    while (!gzeof($source_fp)) {

        $string = gzread($source_fp, $read_bytes);

        if ($is_path) {
            fwrite($dest_fp, $string, strlen($string));
        } else {
            $path_or_callback($string);
        }
    }

    gzclose($source_fp);

    if ($dest_fp) {
        fclose($dest_fp);
    }

}
