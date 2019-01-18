<?php

namespace Yaroskov\Time\Components;

class DateBuilder
{
    public $day_offset = 0;
    public $format = false;
    public $date = false;

    /**
     * @param int $day_offset
     * @return $this
     */
    public function dayOffset(int $day_offset)
    {
        $this->day_offset = $day_offset;
        return $this;
    }

    /**
     * @param string $format
     * @return $this
     */
    public function format(string $format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @param string $date
     * @return $this
     */
    public function date(string $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return false|string
     */
    public function get()
    {
        return (new Date($this))->data();
    }
}