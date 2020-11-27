<?php
declare(strict_types=1);

namespace AppTest;

use App\Yen;
use App\Dollar;
use PHPUnit\Framework\TestCase;

class YenTest extends TestCase
{
    public function test_Yenオブジェクトを数値に変換することのテスト()
    {
        $this->assertSame(100, (new Yen(100))->toInt());
        $this->assertSame(200, (new Yen(200))->toInt());
    }

    public function test_円をドルに変換するテスト()
    {
        $yen100 = new Yen(100);
        $dollar1 = new Dollar(1);
        $this->assertSame($dollar1->toInt(), $yen100->toDollar()->toInt());

        $yen200 = new Yen(200);
        $dollar2 = new Dollar(2);
        $this->assertSame($dollar2->toInt(), $yen200->toDollar()->toInt());
    }

    public function test_円を円に変換するテスト()
    {
        $yen100 = new Yen(100);
        $this->assertSame($yen100->toInt(), $yen100->toYen()->toInt());
    }
}
