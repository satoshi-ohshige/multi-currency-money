<?php
declare(strict_types=1);

namespace AppTest;

use App\Dollar;
use App\Yen;
use PHPUnit\Framework\TestCase;

class ExchangeTest extends TestCase
{
    public function test_1ドルを与えたら100円が返ってくるテスト()
    {
        $dollar1 = new Dollar(1);
        $yen100 = new Yen(100);
        $this->assertSame($yen100->toInt(), $dollar1->toYen()->toInt());

        $dollar2 = new Dollar(2);
        $yen200 = new Yen(200);
        $this->assertSame($yen200->toInt(), $dollar2->toYen()->toInt());
    }
}
