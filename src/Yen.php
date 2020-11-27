<?php
declare(strict_types=1);

namespace App;

class Yen extends Currency
{
    public function add(Currency $addition): Yen
    {
        return new Yen($this->amount + $addition->toYen()->toInt());
    }
}
