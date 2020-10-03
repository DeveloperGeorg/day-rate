<?php

namespace DayRate;

use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;

/**
 * Class CacheProxyCurrencyGetter
 *
 * @package DayRate
 */
class CacheProxyCurrencyGetter implements CurrencyGetterInterface
{
    /**
     * @var CacheInterface
     */
    private $cache;
    /**
     * @var string
     */
    private $cacheKey = 'currency_list';
    /**
     * @var CurrencyGetterInterface
     */
    private $currencyGetter;

    /**
     * CacheProxyCurrencyGetter constructor.
     *
     * @param CacheInterface $cache
     * @param CurrencyGetterInterface $currencyGetter
     * @param string|null $cacheKey
     */
    public function __construct(
        CacheInterface $cache,
        CurrencyGetterInterface $currencyGetter,
        ?string $cacheKey = null
    ) {
        $this->setCache($cache);
        $this->setCurrencyGetter($currencyGetter);
        if ($cacheKey !== null) {
            $this->cacheKey = $cacheKey;
        }
    }

    /**
     * @return array
     * @throws InvalidArgumentException
     */
    public function getList(): array
    {
        $list = $this->getCache()->get($this->getKey());
        if (!is_array($list) || empty($list)) {
            $list = $this->getCurrencyGetter()->getList();
        }

        return $list;
    }

    /**
     * @return string
     */
    private function getKey(): string
    {
        return $this->cacheKey;
    }

    /**
     * @return CacheInterface
     */
    public function getCache(): CacheInterface
    {
        return $this->cache;
    }

    /**
     * @param CacheInterface $cache
     *
     * @return CacheProxyCurrencyGetter
     */
    public function setCache(CacheInterface $cache): CacheProxyCurrencyGetter
    {
        $this->cache = $cache;
        return $this;
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
     * @return CacheProxyCurrencyGetter
     */
    public function setCurrencyGetter(CurrencyGetterInterface $currencyGetter): CacheProxyCurrencyGetter
    {
        $this->currencyGetter = $currencyGetter;
        return $this;
    }
}
