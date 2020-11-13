<?php
declare(strict_types=1);

namespace App;


class Calculator
{
    public function add(Yen $augend, Yen $addition): Yen
    {
        return new Yen($augend->toInt() + $addition->toInt());
    }
}
