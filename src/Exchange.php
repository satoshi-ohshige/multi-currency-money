<?php
declare(strict_types=1);

namespace App;

class Exchange
{

    public function toDollar(Currency $currency): Dollar
    {
        return new Dollar(($currency->getAmount() * CurrencyRate::$rate[$currency::class][Dollar::class]));
    }

    public function toYen(Currency $currency): Yen
    {
        return new Yen(($currency->getAmount() * CurrencyRate::$rate[$currency::class][Yen::class]));
    }
}
