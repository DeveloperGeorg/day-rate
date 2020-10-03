<?php

namespace DayRate;

use DayRate\Model\Currency;

/**
 * Interface CurrencyGetterInterface
 *
 * @package DayRate
 */
interface CurrencyGetterInterface
{
    /**
     * @return Currency[]
     */
    public function getList(): array;
}
