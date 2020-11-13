<?php
declare(strict_types=1);

namespace App;


class Calculator
{
    // 候補1 money型
    public function add(Yen $augend, Yen $addition): Yen
    {
        return new Yen($augend->toInt() + $addition->toInt());
    }
}
