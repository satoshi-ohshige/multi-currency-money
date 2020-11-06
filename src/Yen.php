<?php
declare(strict_types=1);

namespace App;

class Yen
{
    /**
     * Yenクラスのコンストラクタ
     *
     * @param int $amount
     */
    public function __construct(private int $amount)
    {

    }

    public function toInt(): int
    {
        return $this->amount;
    }
}