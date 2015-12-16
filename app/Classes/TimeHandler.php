<?php

namespace App\Classes;

class TimeHandler
{

    const MINUTE = 60;
    const HOUR = 60 * self::MINUTE;
    const DAY = 24 * self::HOUR;

    /**
     * @param $seconds
     */
    public function secondsToTime($seconds)
    {
        $days = floor($seconds / self::DAY);
        $hours = floor($seconds / self::HOUR);
        $minutes = floor($seconds / self::MINUTE);

        return "$days days, $hours hours and $minutes minutes.";
    }
}
