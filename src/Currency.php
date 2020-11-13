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

    public function add(Currency $addition): Currency
    {
        return new ($this::class)($this->amount + $addition->toInt());
    }
}
