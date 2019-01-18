<?php

namespace Yaroskov\Time;

use Yaroskov\Time\Components\Period;
use Yaroskov\Time\Components\DateBuilder;

class Time
{
    /**
     * @return DateBuilder
     */
    public static function date(): DateBuilder
    {
        return new DateBuilder();
    }

    /**
     * @param string $start
     * @param string $end
     * @return array
     * @throws \Exception
     */
    public static function period(string $start, string $end): array
    {
        return Period::get($start, $end);
    }
}