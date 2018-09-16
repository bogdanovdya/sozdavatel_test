<?php

function deposit(float $dep_sum, int $time_month, float $procent) : float
{
    $ret_sum = $dep_sum + $dep_sum * ($procent/100) * ($time_month/12);
    return $ret_sum;
}

?>