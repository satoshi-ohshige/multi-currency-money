<?php
declare(strict_types=1);

namespace App;

abstract class Currency
{
    public function __construct(protected int $amount)
    {

    }

    public function toInt(): int
    {
        return $this->amount;
    }

    public function toDollar(): Dollar
    {
        return new Dollar((int)($this->amount * CurrencyRate::$rate[$this::class][Dollar::class]));
    }

    public function toYen(): Yen
    {
        return new Yen((int)($this->amount * CurrencyRate::$rate[$this::class][Yen::class]));
    }
}
