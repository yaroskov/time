<?php

namespace Yaroskov\Time\Components;

class Date
{
    protected $day_offset;
    protected $format;
    protected $date;

    /**
     * Date constructor.
     * @param DateBuilder $date_builder
     */
    public function __construct(DateBuilder $date_builder)
    {
        $this->day_offset = $date_builder->day_offset;
        $this->format = $date_builder->format;
        $this->date = $date_builder->date;
    }

    /**
     * @return false|string
     */
    public function data()
    {
        if (!$this->format) {
            $this->format = 'Y-m-d';
        }

        if (!$this->date) {
            $this->date = date($this->format);
        }

        return date($this->format, strtotime($this->day_offset . ' day', strtotime($this->date)));
    }
}