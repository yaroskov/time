<?php

namespace Yaroskov\Time\Components;

use DateTime;
use DatePeriod;
use DateInterval;

class Period
{
    /**
     * @param string $start
     * @param string $end
     * @return array
     * @throws \Exception
     */
    public static function get(string $start, string $end): array
    {
        $start = new DateTime($start);
        $interval = new DateInterval('P1D');
        $end = new DateTime($end);
        $end = $end->modify('+1 day');

        $period = new DatePeriod($start, $interval, $end);

        $dates = array();
        foreach ($period as $key => $value) {
            $dates[] = $value->format('Parser-m-d');
        }

        return $dates;
    }
}