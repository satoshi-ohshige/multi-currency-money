<?php
declare(strict_types=1);

namespace App;


class Calculator
{
    // 候補1 money型
    // 候補2 calculator生成時にyenCalculatorをつくる。Calculatorを細分化
    // 候補3 addDollarを作る
    public function add(Yen $augend, Yen $addition): Yen
    {
        return new Yen($augend->toInt() + $addition->toInt());
    }
}
