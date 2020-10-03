<?php

namespace DayRate;

use DateTime;
use DayRate\Model\Currency;
use DayRate\Model\DayRate;

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
     * @param Currency|null $baseCurrency
     *
     * @return DayRate[]
     */
    public function getList(DateTime $dateTime, Currency $quoteCurrency, ?Currency $baseCurrency = null): array;
}
