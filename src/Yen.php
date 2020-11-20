<?php
declare(strict_types=1);

namespace App;

use App\Dollar;

class Yen extends Currency
{
    public function toYen(): Yen
    {
        return new Yen($this->amount);
    }

    public function toDollar(): Dollar
    {
        return new Dollar($this->amount / 100);
    }

    public function add(Currency $addition): Yen
    {
        return new Yen($this->amount + $addition->toYen()->toInt());
    }
}
