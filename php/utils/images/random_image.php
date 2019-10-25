<?php

/**
 * Get random image from picsum.photos site
 * @param $height  - desired height of image
 * @param $width   - desired width of image
 * @return $url : string
 */
function getRandomAvatar($height = 200, $width = 200)
{
    $id = random_int(1, 1200);
    $url = "https://picsum.photos/id/{$id}/{$height}/{$width}";

    return $url;
}