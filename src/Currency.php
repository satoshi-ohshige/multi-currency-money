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
}
