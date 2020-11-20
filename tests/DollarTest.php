<?php
declare(strict_types=1);

namespace AppTest;

use App\Dollar;
use App\Yen;
use PHPUnit\Framework\TestCase;

class DollarTest extends TestCase
{
    public function test_Dollarオブジェクトを数値に変換することのテスト()
    {
        $this->assertSame(100, (new Dollar(100))->toInt());
        $this->assertSame(200, (new Dollar(200))->toInt());
    }

    public function test_ドルを円に変換するテスト()
    {
        $dollar1 = new Dollar(1);
        $yen100 = new Yen(100);
        $this->assertSame($yen100->toInt(), $dollar1->toYen()->toInt());

        $dollar2 = new Dollar(2);
        $yen200 = new Yen(200);
        $this->assertSame($yen200->toInt(), $dollar2->toYen()->toInt());
    }

    public function test_ドルをドルに変換するテスト()
    {
        $dollar1 = new Dollar(1);
        $this->assertSame($dollar1->toInt(), $dollar1->toDollar()->toInt());
    }
}
