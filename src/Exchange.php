<?php
declare(strict_types=1);

namespace App;

class Exchange
{

    public function toDollar(Currency $currency): Dollar
    {
        return new Dollar((int)($currency->toInt() * CurrencyRate::$rate[$currency::class][Dollar::class]));
    }

    public function toYen(Currency $currency): Yen
    {
        return new Yen((int)($currency->toInt() * CurrencyRate::$rate[$currency::class][Yen::class]));
    }
}