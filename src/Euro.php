<?php
declare(strict_types=1);

namespace App;

class Euro extends Currency
{
    public function add(Euro $addition): Euro
    {
        return new Euro($this->amount + $addition->toInt());
    }
}
