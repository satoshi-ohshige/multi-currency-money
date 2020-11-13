<?php
declare(strict_types=1);

namespace App;


class Calculator
{
    public function add(Currency $augend, Currency $addition): Currency
    {
        return new ($augend::class)($augend->toInt() + $addition->toInt());
    }
}
