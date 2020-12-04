<?php
declare(strict_types=1);

namespace App;

class Exchange
{

    public function toDollar(Currency $currency): Dollar
    {
        return new Dollar($this->exchange($currency, Dollar::class));
    }

    public function toYen(Currency $currency): Yen
    {
        return new Yen($this->exchange($currency, Yen::class));
    }

    private function exchange(Currency $currency, string $to_exchange_class_name)
    {
        return $currency->getAmount() * CurrencyRate::$rate[$currency::class][$to_exchange_class_name];
    }

    public function toEuro(Currency $currency): Euro
    {
        return new Euro($this->exchange($currency, Euro::class));
    }
}
