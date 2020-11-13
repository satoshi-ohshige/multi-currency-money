<?php
declare(strict_types=1);

namespace App;

use App\Dollar;

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

    public function toDollar(): Dollar
    {
        return new Dollar($this->amount / 100);
    }
}