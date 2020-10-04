<?php

namespace DayRate;

/**
 * Class Currency
 *
 * @package DayRate
 */
class Currency
{
    /**
     * @var string
     */
    private $code;

    /**
     * Currency constructor.
     *
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->setCode($code);
    }

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
