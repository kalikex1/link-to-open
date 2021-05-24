<?php
function getLines($text, $start, $end = false)
{
    $devices = explode("\n", $text);

    $output = "";
    foreach ($devices as $key => $line)
    {
        if ($key+1 < $start) continue;
        if ($end && $key+1 > $end) break;
        $output .= $line;
    }
    return $output;
}