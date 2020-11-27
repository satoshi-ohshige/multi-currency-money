<?php
declare(strict_types=1);

namespace App;

class Yen extends Currency
{
    public function add(Yen $addition): Yen
    {
        return new Yen($this->amount + $addition->toInt());
    }
}
