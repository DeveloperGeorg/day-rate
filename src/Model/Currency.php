<?php

namespace DayRate\Model;

/**
 * Class Currency
 *
 * @package DayRate\Model
 */
class Currency
{
    /**
     * @var string
     */
    private $code;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return Currency
     */
    public function setCode(string $code): Currency
    {
        $this->code = $code;
        return $this;
    }
}
