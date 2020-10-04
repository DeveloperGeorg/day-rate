<?php

namespace DayRate;

use DateTime;

/**
 * Class DayRate
 *
 * @package DayRate
 */
class DayRate
{
    /**
     * @var Currency
     */
    private $quoteCurrency;
    /**
     * @var Currency
     */
    private $baseCurrency;
    /**
     * @var DateTime
     */
    private $day;
    /**
     * @var float
     */
    private $price;

    /**
     * DayRate constructor.
     *
     * @param Currency $quoteCurrency
     * @param Currency $baseCurrency
     * @param DateTime $day
     * @param float $price
     */
    public function __construct(Currency $quoteCurrency, Currency $baseCurrency, DateTime $day, float $price)
    {
        $this->quoteCurrency = $quoteCurrency;
        $this->baseCurrency = $baseCurrency;
        $this->day = $day;
        $this->price = $price;
    }

    /**
     * @return Currency
     */
    public function getQuoteCurrency(): Currency
    {
        return $this->quoteCurrency;
    }

    /**
     * @param Currency $quoteCurrency
     *
     * @return DayRate
     */
    public function setQuoteCurrency(Currency $quoteCurrency): DayRate
    {
        $this->quoteCurrency = $quoteCurrency;
        return $this;
    }

    /**
     * @return Currency
     */
    public function getBaseCurrency(): Currency
    {
        return $this->baseCurrency;
    }

    /**
     * @param Currency $baseCurrency
     *
     * @return DayRate
     */
    public function setBaseCurrency(Currency $baseCurrency): DayRate
    {
        $this->baseCurrency = $baseCurrency;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDay(): DateTime
    {
        return $this->day;
    }

    /**
     * @param DateTime $day
     *
     * @return DayRate
     */
    public function setDay(DateTime $day): DayRate
    {
        $this->day = $day;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return DayRate
     */
    public function setPrice(float $price): DayRate
    {
        $this->price = $price;
        return $this;
    }
}
