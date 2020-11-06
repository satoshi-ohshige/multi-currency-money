<?php
declare(strict_types=1);

namespace AppTest;

use App\Dollar;
use App\Yen;
use PHPUnit\Framework\TestCase;

class ExchangeTest extends TestCase
{
    public function test_ドルを円に変換するテスト()
    {
        $dollar1 = new Dollar(1);
        $yen100 = new Yen(100);
        $this->assertSame($yen100->toInt(), $dollar1->toYen()->toInt());

        $dollar2 = new Dollar(2);
        $yen200 = new Yen(200);
        $this->assertSame($yen200->toInt(), $dollar2->toYen()->toInt());
    }

    public function test_円をドルに変換するテスト()
    {
        // TODO このテストはまだ動かない
        $yen100 = new Yen(100);
        $dollar1 = new Dollar(1);
        $this->assertSame($dollar1->toInt(), $yen100->toDollar()->toInt());

        $yen200 = new Yen(200);
        $dollar2 = new Dollar(2);
        $this->assertSame($dollar2->toInt(), $yen200->toDollar()->toInt());
    }
}
