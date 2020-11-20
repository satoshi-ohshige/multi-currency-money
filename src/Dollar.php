<?php
declare(strict_types=1);

namespace App;

class Dollar extends Currency
{
    public function toDollar(): Dollar
    {
        return new Dollar($this->amount);
    }

    public function toYen(): Yen
    {
        return new Yen($this->amount*100);
    }

    public function add(Currency $addition): Dollar
    {
        return new Dollar($this->amount + $addition->toDollar()->toInt());
    }
}
