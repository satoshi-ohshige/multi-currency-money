<?php
declare(strict_types=1);

namespace App;

abstract class Currency
{
    public function __construct(protected float $amount)
    {

    }

    public function toInt(): int
    {
        return (int)$this->amount;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
