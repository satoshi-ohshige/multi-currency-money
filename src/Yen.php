<?php
declare(strict_types=1);

namespace App;

use App\Dollar;

class Yen extends Currency
{
    public function toDollar(): Dollar
    {
        return new Dollar($this->amount / 100);
    }
}
