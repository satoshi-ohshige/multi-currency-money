<?php
declare(strict_types=1);

namespace App;

class Dollar extends Currency
{
    public function toYen(): Yen
    {
        return new Yen($this->amount*100);
    }
}
