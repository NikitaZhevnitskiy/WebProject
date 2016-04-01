<?php

/**
 * Clean input data
 *
 * @param string $dataString
 * @return string
 */
function cleanPostData($dataString)
{
    $dataString = ($dataString !== null) ? $dataString : "";
    $dataString = strip_tags(urldecode(trim($dataString)));

    return $dataString;
}