<?php

namespace DayRate;

use DateTime;

/**
 * Interface DayRateGetterInterface
 *
 * @package DayRate
 */
interface DayRateGetterInterface
{
    /**
     * @param DateTime $dateTime
     * @param Currency $quoteCurrency
     * @param Currency $baseCurrency
     *
     * @return DayRate
     */
    public function get(DateTime $dateTime, Currency $quoteCurrency, Currency $baseCurrency): ?DayRate;
}
