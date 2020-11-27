<?php
declare(strict_types=1);

namespace App;

class Dollar extends Currency
{
    public function add(Dollar $addition): Dollar
    {
        return new Dollar($this->amount + $addition->toInt());
    }
}
