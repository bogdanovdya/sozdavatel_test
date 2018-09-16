<?php

function degrees(int $hour, int $minutes) : float
{
    while($hour >= 12){
        $hour -= 12;
    }
    while($minutes >= 60){
        $minutes -= 60;
    }

    $hour = ($hour * 5) + ($minutes * 5 / 60);
    $retDegrees = abs($hour - $minutes) * (360 / 60);
    
    if($retDegrees > 180) $retDegrees = 360 - $retDegrees;
    return $retDegrees;
}

?>