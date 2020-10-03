<?php

namespace DayRate;

use DateTime;
use DayRate\Model\Currency;
use DayRate\Model\DayRate;

/**
 * Class Facade
 *
 * @package DayRate
 */
class Facade
{
    /**
     * @var CurrencyGetterInterface
     */
    private $currencyGetter;
    /**
     * @var DayRateGetterInterface
     */
    private $dayRateGetter;

    /**
     * Facade constructor.
     *
     * @param CurrencyGetterInterface $currencyGetter
     * @param DayRateGetterInterface $dayRateGetter
     */
    public function __construct(CurrencyGetterInterface $currencyGetter, DayRateGetterInterface $dayRateGetter)
    {
        $this->setCurrencyGetter($currencyGetter);
        $this->setDayRateGetter($dayRateGetter);
    }

    /**
     * @return Currency[]
     */
    public function getCurrencyList(): array
    {
        return $this->getCurrencyGetter()->getList();
    }

    /**
     * @param DateTime $dateTime
     * @param Currency $quoteCurrency
     * @param Currency|null $baseCurrency
     *
     * @return DayRate[]
     */
    public function getDayRate(DateTime $dateTime, Currency $quoteCurrency, ?Currency $baseCurrency = null): array
    {
        return $this->getDayRateGetter()->getList($dateTime, $quoteCurrency, $baseCurrency);
    }

    /**
     * @return CurrencyGetterInterface
     */
    public function getCurrencyGetter(): CurrencyGetterInterface
    {
        return $this->currencyGetter;
    }

    /**
     * @param CurrencyGetterInterface $currencyGetter
     *
     * @return Facade
     */
    public function setCurrencyGetter(CurrencyGetterInterface $currencyGetter): Facade
    {
        $this->currencyGetter = $currencyGetter;
        return $this;
    }

    /**
     * @return DayRateGetterInterface
     */
    public function getDayRateGetter(): DayRateGetterInterface
    {
        return $this->dayRateGetter;
    }

    /**
     * @param DayRateGetterInterface $dayRateGetter
     *
     * @return Facade
     */
    public function setDayRateGetter(DayRateGetterInterface $dayRateGetter): Facade
    {
        $this->dayRateGetter = $dayRateGetter;
        return $this;
    }
}
