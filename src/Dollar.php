<?php
declare(strict_types=1);

namespace App;

class Dollar
{
    /**
     * Dollarクラスのコンストラクタ
     *
     * @param int $amount
     */
    public function __construct(private int $amount)
    {

    }

    public function toYen(): Yen
    {
        return new Yen($this->amount*100);
    }

    public function toInt(): int
    {
        return $this->amount;
    }
}
